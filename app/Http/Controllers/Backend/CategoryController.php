<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends CommonController
{
    protected string $module = 'categories';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Category::latest(),$this->module, true);
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
        ]);
        Category::create($request->all());
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(Category $category)
    {
        return view('backend.' . $this->module . '.edit', compact('category'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,Category $category)
    {
        $category->update($request->all());
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
