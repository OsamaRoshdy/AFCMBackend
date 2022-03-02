<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PermissionRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends CommonController
{
    protected string $module = 'permissions';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Permission::query()->latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'name' => ['title' => 'Name', 'searchable' => true, 'orderable' => true],
            'guard_name' => ['title' => 'guard_name', 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder,$columns,true, true);
        return view('backend.acl.permissions.index', compact('html'))->with(['module' => $this->module]);
    }

    public function create()
    {
        return view('backend.acl.permissions.create')
            ->with(['module' => $this->module, 'action' => 'create']);
    }

    public function store(PermissionRequest $request)
    {
        Permission::create($request->all());
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(Permission $permission)
    {
        return view('backend.acl.permissions.edit', compact( 'permission'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(PermissionRequest $request,Permission $permission)
    {
        $permission->update($request->all());
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
