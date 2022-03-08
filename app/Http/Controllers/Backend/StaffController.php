<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Traits\ImageTrait;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends CommonController
{
    use ImageTrait;
    protected string $module = 'staff';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Staff::latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'full_name_' . app()->getLocale() => ['title' => __('common.full_name'), 'searchable' => true, 'orderable' => true],
            'title_' . app()->getLocale() => ['title' => __('common.title'), 'searchable' => true, 'orderable' => true],
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
            'full_name_ar' => 'required',
            'full_name_en' => 'required',
            'title_ar' => 'required',
            'title_en' => 'required',
            'status' => 'required',
            'image_name' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        $data = $request->except(['image_name']);
        $data['image_name'] = $this->storeImage($request->image_name, 'staff');
        Staff::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(Staff $staff)
    {
        return view('backend.' . $this->module . '.edit', compact( 'staff'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,Staff $staff)
    {
        $request->validate([
            'full_name_ar' => 'required',
            'full_name_en' => 'required',
            'title_ar' => 'required',
            'title_en' => 'required',
            'status' => 'required',
        ]);
        $data = $request->except(['image_name']);
        if ($request->image_name) {
            $data['image_name'] = $this->updateImage($request->image_name, $staff->image_name,'staff');
        }
        $staff->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(Staff $staff)
    {
        $this->deleteImage($staff->image_name, 'staff');
        $staff->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
