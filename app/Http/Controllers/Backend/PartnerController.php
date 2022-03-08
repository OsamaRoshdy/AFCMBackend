<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Traits\ImageTrait;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends CommonController
{
    use ImageTrait;
    protected string $module = 'partners';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Partner::latest(),$this->module, true);
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
            'image_name' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
            'type' => 'required',
        ]);
        $data = $request->except(['image_name']);
        $data['image_name'] = $this->storeImage($request->image_name, 'partners');
        Partner::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(Partner $partner)
    {
        return view('backend.' . $this->module . '.edit', compact('partner'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,Partner $partner)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'status' => 'required',
            'type' => 'required',
            'image_name' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        $data = $request->except(['image_name']);
        if ($request->image_name) {
            $data['image_name'] = $this->updateImage($request->image_name, $partner->image_name,'partners');
        }
        $partner->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(Partner $partner)
    {
        $this->deleteImage($partner->image_name, 'partners');
        $partner->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
