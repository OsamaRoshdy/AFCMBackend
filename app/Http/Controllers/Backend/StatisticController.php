<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends CommonController
{
    protected string $module = 'statistics';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Statistic::latest(),$this->module, true);
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
            'name_ar' => 'required',
            'icon' => 'required',
            'sort' => 'required',
            'count' => 'required',
        ]);
        $data = $request->except(['image']);
        Statistic::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(Statistic $statistic)
    {
        return view('backend.' . $this->module . '.edit', compact( 'statistic'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,Statistic $statistic)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            'icon' => 'required',
            'sort' => 'required',
            'count' => 'required',
        ]);
        $data = $request->except(['image']);
        $statistic->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(Statistic $statistic)
    {
        $statistic->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
