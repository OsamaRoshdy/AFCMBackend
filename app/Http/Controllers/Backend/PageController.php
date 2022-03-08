<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Traits\ImageTrait;
use App\Http\Requests\Backend\BlockRequest;
use App\Models\Block;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends CommonController
{
    use ImageTrait;
    protected string $module = 'pages';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Block::where('type', Block::TYPE_PAGES)->latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'title_' . app()->getLocale() => ['title' => __('common.name'), 'searchable' => true, 'orderable' => true],
            'description_' . app()->getLocale() => ['title' => __('common.description'), 'searchable' => true, 'orderable' => true],
            'status' => ['title' => __('common.status'), 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder,$columns,true, true);
        return view('backend.' . $this->module . '.index', compact('html'))->with(['module' => $this->module]);
    }

    public function create()
    {
        return view('backend.news.create')
            ->with(['module' => $this->module, 'action' => 'create']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_name' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        $data = $request->except(['image_name', 'images']);
        $data['type'] = Block::TYPE_PAGES;
        Block::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit($id)
    {
        $block = Block::find($id)->load('images');
        return view('backend.' . $this->module . '.edit', compact( 'block'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'image_name' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        $block = Block::find($id);
        $data = $request->except(['image_name', 'images']);
        $block->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy($id)
    {
        $block = Block::find($id);
        $block->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
