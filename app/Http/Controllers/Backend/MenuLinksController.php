<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MainPage;
use App\Models\MenuLinks;
use Illuminate\Http\Request;

class MenuLinksController extends CommonController
{
    protected string $module = 'menu_links';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(MenuLinks::with('mainPage'), $this->module, true, function ($builder) {
                $builder->addColumn('links', function ($record) {
                    $string = '';
                    $string .= '<a style="color:red" href=' .  route('dashboard.links.index', $record->id)  .'>';
                    $string .= '<i class="fa fa-link"></i>';
                    $string .= '</a>';
                    return $string;
                });
                return $builder;
            }, ['links']);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'name_' . app()->getLocale() => ['title' => __('common.name'), 'searchable' => true, 'orderable' => true],
            'links' => ['title' => __('common.links'), 'searchable' => true, 'orderable' => true],
            'status' => ['title' => __('common.status'), 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder, $columns, true, true);
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
            'name_en' => 'required',
            'name_ar' => 'required',
            'main_page_id' => 'required',
        ]);
        $data = $request->except(['image']);
        MenuLinks::create($data);
        toast(__('common.added_successfully'), 'success', 'top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit(MenuLinks $menuLink)
    {
        $mainPages = MainPage::pluck('name_' . app()->getLocale(), 'id');
        return view('backend.' . $this->module . '.edit', compact('menuLink', 'mainPages'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request, MenuLinks $menuLink)
    {
        $data = $request->except(['image']);
        $menuLink->update($data);
        toast(__('common.updated_successfully'), 'success', 'top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy(MenuLinks $menuLink)
    {
        $menuLink->delete();
        toast(__('common.deleted_successfully'), 'success', 'top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
