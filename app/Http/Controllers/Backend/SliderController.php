<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Traits\ImageTrait;
use App\Models\Slider;
use App\Models\SliderGroup;
use Illuminate\Http\Request;

class SliderController extends CommonController
{
    use ImageTrait;
    protected string $module = 'sliders';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Slider::with('sliderGroup')->latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'description_' . app()->getLocale() => ['title' => __('common.name'), 'searchable' => true, 'orderable' => true],
            'status' => ['title' => __('common.status'), 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder,$columns,true, true);
        return view('backend.' . $this->module . '.index', compact('html'))->with(['module' => $this->module]);
    }

    public function create()
    {
        $sliderGroups = SliderGroup::pluck('name', 'id');
        return view('backend.' . $this->module . '.create', compact('sliderGroups'))
            ->with(['module' => $this->module, 'action' => 'create']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'description_ar' => 'required',
            'description_en' => 'required',
            'slider_group_id' => 'required',
            'status' => 'required',
            'image_name' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        $data = $request->except(['image_name']);
        $data['image_name'] = $this->storeImage($request->image_name, 'sliders');
        Slider::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(Slider $slider)
    {
        $sliderGroups = SliderGroup::pluck('name', 'id');
        return view('backend.' . $this->module . '.edit', compact( 'sliderGroups', 'slider'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,Slider $slider)
    {
        $request->validate([
            'description_ar' => 'required',
            'description_en' => 'required',
            'slider_group_id' => 'required',
            'status' => 'required',
            'image_name' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        $data = $request->except(['image_name']);
        if ($request->image_name) {
            $data['image_name'] = $this->updateImage($request->image_name, $slider->image_name,'sliders');
        }
        $slider->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(Slider $slider)
    {
        $this->deleteImage($slider->image_name, 'sliders');
        $slider->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
