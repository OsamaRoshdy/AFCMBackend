<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends CommonController
{
    protected string $module = 'pages';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Page::latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'title_' . app()->getLocale() => ['title' => __('common.name'), 'searchable' => true, 'orderable' => true],
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
            'title_en' => 'required',
            'title_ar' => 'required'
        ]);
        Page::create($request->all());
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(Page $page)
    {
        return view('backend.' . $this->module . '.edit', compact( 'page'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,Page $page)
    {
        $data = $request->except(['image']);
        $page->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
