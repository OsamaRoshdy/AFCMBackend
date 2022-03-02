<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends CommonController
{
    protected string $module = 'roles';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Role::query()->latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'name' => ['title' => __('common.name'), 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder,$columns,true, true);
        return view('backend.acl.roles.index', compact('html'))->with(['module' => $this->module]);
    }

    public function create()
    {
        return view('backend.acl.roles.create')
            ->with(['module' => $this->module, 'action' => 'create']);
    }

    public function store(RoleRequest $request)
    {
        Role::create([
            'name' => $request->name,
            'guard_name' => 'admin'
        ]);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(Role $role)
    {
        return view('backend.acl.roles.edit', compact( 'role'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(RoleRequest $request,Role $role)
    {
        $role->update($request->all());
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(Role $role)
    {
        toast(__('common.deleted_successfully'),'success','top-right');
        $role->delete();
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function attachPermissions(Role $role)
    {
        $permissionsGrouped = Permission::where('guard_name', $role->guard_name)
            ->get()
            ->mapToGroups(function($item) {
                $group = explode('_', $item->name)[1];
                return [$group => $item];
            });
        return view('backend.acl.roles.attach_permissions', compact( 'role','permissionsGrouped'))
            ->with(['module' => $this->module, 'action' => 'attach_permissions']);
    }

    public function storeAttachPermissions(Request $request, Role $role)
    {
        $role->syncPermissions($request->permissions);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
