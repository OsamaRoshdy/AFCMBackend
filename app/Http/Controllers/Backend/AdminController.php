<?php

namespace App\Http\Controllers\Backend;

use App\Http\Foundation\Traits\ImageTrait;
use App\Http\Requests\Backend\AdminRequest;
use App\Models\Admin;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class AdminController extends CommonController
{
    use ImageTrait;
    protected string $module = 'admins';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Admin::where('id', '!=', 1)->latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'name' => ['title' => 'Name', 'searchable' => true, 'orderable' => true],
            'email' => ['title' => 'Email', 'searchable' => true, 'orderable' => true],
            'status' => ['title' => 'Status', 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder,$columns,true, true);
        return view('backend.acl.admins.index', compact('html'))->with(['module' => $this->module]);
    }

    public function create()
    {
        $roles = Role::where('id', '!=', 1)->where('guard_name', 'admin')->pluck('name', 'id');
        return view('backend.acl.admins.create', compact('roles'))
            ->with(['module' => $this->module, 'action' => 'create']);
    }

    public function store(AdminRequest $request)
    {
        $data = $request->except(['role_id', 'image']);
        $data['image'] = $this->storeImage($request->image, $this->module);
        $admin = Admin::create($data);
        $admin->assignRole($request->role_id);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(Admin $admin)
    {
        $roles = Role::where('id', '!=', 1)->where('guard_name', 'admin')->pluck('name', 'id');
        return view('backend.acl.admins.edit', compact('roles', 'admin'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(AdminRequest $request,Admin $admin)
    {
        $data = $request->except(['role_id', 'image']);
        $data['image'] = $this->updateImage($request->image, $admin->image,$this->module);
        $admin->update($data);
        $admin->syncRoles($request->role_id);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(Admin $admin)
    {
        $this->deleteImage($admin->image, $this->module);
        $admin->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
