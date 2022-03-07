<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Link;
use App\Models\MenuLinks;
use App\Models\Page;
use Illuminate\Http\Request;

class LinksController extends CommonController
{
    protected string $module = 'links';

    public function index(Request $request,$menuLink)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Link::where('menu_link_id', $menuLink)->latest(), $this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'name_' . app()->getLocale() => ['title' => __('common.name'), 'searchable' => true, 'orderable' => true],
            'sort' => ['title' => __('common.sort'), 'searchable' => true, 'orderable' => true],
            'status' => ['title' => __('common.status'), 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder, $columns, true, true);
        return view('backend.' . $this->module . '.index', compact('html' ,'menuLink'))->with(['module' => $this->module]);
    }

    public function create($menuLink)
    {
        $pages = Block::whereIn('type', [Block::TYPE_PAGES])->pluck('title_'. app()->getLocale(), 'id');
        $links = Link::where('menu_link_id', $menuLink)->pluck('name_' . app()->getLocale(), 'id');
        return view('backend.' . $this->module . '.create', compact('pages','links', 'menuLink'))
            ->with(['module' => $this->module, 'action' => 'create']);
    }

    public function store(Request $request,$menuLink)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $data = $request->except(['image']);
        $data['menu_link_id'] = $menuLink;
        Link::create($data);
        toast(__('common.added_successfully'), 'success', 'top-right');
        return redirect()->route('dashboard.' . $this->module . '.index', $menuLink);
    }

    public function edit(Link $link)
    {
        $pages = Block::whereIn('type', [Block::TYPE_PAGES])->pluck('title_'. app()->getLocale(), 'id');
        $links = Link::where('menu_link_id' , $link->menu_link_id)->where('id', '!=', $link->id)->pluck('name_' . app()->getLocale(), 'id');
        return view('backend.' . $this->module . '.edit', compact( 'link', 'links', 'pages'))
            ->with(['module' => $this->module, 'action' => 'edit', 'menuLink' => $link->menu_link_id]);
    }

    public function update(Request $request, Link $link)
    {

        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
        ]);
        $data = $request->except(['image']);
        if ($request->block_id) {
            $block = Block::findOrFail($request->block_id);
            $data['route'] = $block->slug;
        }
        $link->update($data);
        toast(__('common.updated_successfully'), 'success', 'top-right');
        return redirect()->route('dashboard.' . $this->module . '.index', $link->menu_link_id);
    }

    public function destroy(Link $link)
    {
        $link->delete();
        toast(__('common.deleted_successfully'), 'success', 'top-right');
        return redirect()->route('dashboard.' . $this->module . '.index', $link->id);
    }
}
