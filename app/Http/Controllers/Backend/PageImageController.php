<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Classes\Blocks;
use App\Http\Foundation\Traits\ImageTrait;
use App\Models\Block;
use App\Models\Media;
use App\Models\MediaGroup;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;

class PageImageController extends CommonController
{
    use ImageTrait;
    protected string $module = 'pages_images';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(MediaGroup::find(21)->images,$this->module, true, function ($builder) {
                $builder->addColumn('image', function ($record) {
                    return '<img style="width:100%" src="' . $record->image .'">';
                })->addColumn('url', function ($record) {
                    return $record->image;
                });
                return $builder;
            }, ['url', 'image']);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'image' => ['title' => __('common.image'), 'searchable' => true, 'orderable' => true],
            'url' => ['title' => __('common.image'), 'searchable' => true, 'orderable' => true],
        ];
        $html = $this->tableHtmlBuilder($this->htmlBuilder,$columns,true, false);
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
            'image_name' => 'required|image|mimes:jpg,png,jpeg,gif|max:4048',
        ]);
        Media::create([
            'media_group_id' =>  21,
            'image_name' => $this->storeImage($request->image_name, 'media'),
            'type' => Media::TYPE_IMAGE
        ]);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy($id)
    {
        $block = Media::find($id);
        $this->deleteImage($block->image_name, 'media');
        $block->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
