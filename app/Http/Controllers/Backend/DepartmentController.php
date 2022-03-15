<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Traits\ImageTrait;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends CommonController
{
    use ImageTrait;
    protected string $module = 'departments';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Department::latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'name_' . app()->getLocale() => ['title' => __('common.name'), 'searchable' => true, 'orderable' => true],
            'status' => ['title' => __('common.status'), 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder,$columns,true, true);
        return view('backend.' . $this->module . '.index', compact('html'))->with(['module' => $this->module]);
    }

    public function create()
    {
        return view('backend.' . $this->module . '.create')
            ->with(['module' => $this->module, 'action' => 'create']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'status' => 'required',
            'image_name' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',

            ]);
        $data = $request->except(['image_name']);
        $data['image_name'] = $this->storeImage($request->image_name, 'departments');
        Department::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(Department $department)
    {
        return view('backend.' . $this->module . '.edit', compact('department'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,Department $department)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'status' => 'required',
            'image_name' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',

        ]);
        $data = $request->except(['image_name']);
        if ($request->image_name) {
            $data['image_name'] = $this->updateImage($request->image_name, $department->image_name,'departments');
        }
        $department->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(Department $department)
    {
        $this->deleteImage($department->image_name, 'departments');
        $department->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
