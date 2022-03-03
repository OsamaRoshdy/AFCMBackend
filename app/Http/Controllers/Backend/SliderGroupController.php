<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Traits\ImageTrait;
use App\Models\MainPage;
use App\Models\SliderGroup;
use Illuminate\Http\Request;

class SliderGroupController extends CommonController
{
    use ImageTrait;
    protected string $module = 'slider_groups';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(SliderGroup::with('mainPage')->latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'name'=> ['title' => __('common.name'), 'searchable' => true, 'orderable' => true],
            'status' => ['title' => __('common.status'), 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder,$columns,true, true);
        return view('backend.' . $this->module . '.index', compact('html'))->with(['module' => $this->module]);
    }

    public function create()
    {
        $mainPages = MainPage::pluck('name_' . app()->getLocale(), 'id');
        return view('backend.' . $this->module . '.create', compact('mainPages'))
            ->with(['module' => $this->module, 'action' => 'create']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'main_page_id' => 'required',
            'status' => 'required',
        ]);
        SliderGroup::create($request->all());
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(SliderGroup $sliderGroup)
    {
        $mainPages = MainPage::pluck('name_' . app()->getLocale(), 'id');
        return view('backend.' . $this->module . '.edit', compact( 'sliderGroup', 'mainPages'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,SliderGroup $sliderGroup)
    {
        $sliderGroup->update($request->all());
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(SliderGroup $sliderGroup)
    {
        foreach ($sliderGroup->sliders as $slider) {
            $this->deleteImage($slider->image_name, 'sliders');
            $slider->delete();
        }
        $sliderGroup->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
