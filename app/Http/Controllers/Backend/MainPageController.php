<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MainPage;
use Illuminate\Http\Request;

class MainPageController extends CommonController
{
    protected string $module = 'main_pages';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(MainPage::latest(),$this->module, true);
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
           'name_en' => 'required',
           'name_ar' => 'required'
        ]);
        $data = $request->except(['image']);
        MainPage::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(MainPage $mainPage)
    {
        return view('backend.' . $this->module . '.edit', compact( 'mainPage'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,MainPage $mainPage)
    {
        $data = $request->except(['image']);
        $mainPage->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(MainPage $mainPage)
    {
        $mainPage->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
