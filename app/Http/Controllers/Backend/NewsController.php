<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Classes\Blocks;
use App\Http\Foundation\Traits\ImageTrait;
use App\Http\Requests\Backend\BlockRequest;
use App\Models\Block;
use App\Models\BlockImage;
use App\Models\Category;
use App\Models\CategoryBlock;
use App\Models\MainPage;
use App\Models\MainPageBlock;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;

class NewsController extends CommonController
{
    use ImageTrait;
    protected string $module = 'news';
    protected Blocks $blocks;

    public function __construct(Builder $htmlBuilder, Blocks $blocks)
    {
        parent::__construct($htmlBuilder);
        $this->blocks = $blocks;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Block::where('type', Block::TYPE_NEWS)->latest(),$this->module, true);
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
        $categories = Category::pluck('name_' . app()->getLocale(), 'id');
        $mainPages = MainPage::where('id', '!=', 4)->pluck('name_' . app()->getLocale(), 'id');
        return view('backend.' . $this->module . '.create', compact('categories', 'mainPages'))
            ->with(['module' => $this->module, 'action' => 'create']);
    }

    public function store(BlockRequest $request)
    {
        $request->validate([
           'image_name' => 'required',
           'description_ar' => 'required',
           'description_en' => 'required',
           'content_ar' => 'required',
           'content_en' => 'required',
        ]);
        $data = $request->except(['image_name', 'images']);
        $data['type'] = Block::TYPE_NEWS;
        $block = Block::create($data);
        $this->syncCategories($request->categories, $block);
        $this->syncMainPages($request->mainPages, $block);
        $this->blocks->afterCreate($block);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit($id)
    {
        $block = Block::find($id)->load(['images', 'categories']);
        $categories = Category::pluck('name_' . app()->getLocale(), 'id');
        $mainPages = MainPage::where('id', '!=', 4)->pluck('name_' . app()->getLocale(), 'id');
        return view('backend.' . $this->module . '.edit', compact('categories', 'mainPages', 'block'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(BlockRequest $request,$id)
    {

        $block = Block::find($id);
        $data = $request->except(['image_name', 'images']);
        $block->update($data);
        $this->syncCategories($request->categories, $block);
        $this->syncMainPages($request->mainPages, $block);
        $this->blocks->afterUpdate($block);

        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy($id)
    {
        $block = Block::find($id);
        $this->blocks->beforeDelete($block);
        $block->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function deleteBlockImage($blockImage)
    {
        $blockImage = BlockImage::find($blockImage);
        $this->deleteImage($blockImage->image_name, 'blocks');
        $blockImage->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->back();
    }



    private function syncCategories(?array $categories = [], Block $block)
    {
        $blockCategories = CategoryBlock::where('block_id', $block->id);
        $blockCategories ? $blockCategories->delete() : false;
        foreach ($categories ?? [] as $category) {
            CategoryBlock::create([
                'category_id' => $category,
                'block_id' => $block->id,
                'type' => $block->type,
                'date' => $block->date,
            ]);
        }
    }

    private function syncMainPages(?array $mainPages = [], Block $block)
    {
        $blockCategories = MainPageBlock::where('block_id', $block->id);
        $blockCategories ? $blockCategories->delete() : false;
        foreach ($mainPages ?? [] as $page) {
            MainPageBlock::create([
                'main_page_id' => $page,
                'block_id' => $block->id,
                'type' => $block->type,
                'date' => $block->date,
            ]);
        }

    }
}
