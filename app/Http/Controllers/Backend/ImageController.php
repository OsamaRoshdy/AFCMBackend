<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Traits\ImageTrait;
use App\Models\Media;
use App\Models\MediaGroup;
use Illuminate\Http\Request;

class ImageController extends CommonController
{
    use ImageTrait;
    protected string $module = 'images';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(MediaGroup::latest(),$this->module, true);
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
            'image_name' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        $data = $request->except(['images']);
        $data['slug_en'] = str_slug($request->name_en);
        $data['slug_ar'] = slug_ar($request->name_ar);
        $media = MediaGroup::create($data);
            foreach ($request->images as $image) {
                Media::create([
                    'media_group_id' =>  $media->id,
                    'image_name' => $this->storeImage($image, 'media'),
                    'type' => Media::TYPE_IMAGE
                ]);
            }

        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit($id)
    {
        $media = MediaGroup::findOrFail($id)->load('images');
        return view('backend.' . $this->module . '.edit', compact('media'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'image_name' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
        $media = MediaGroup::findOrFail($id);
        $data = $request->except(['images']);
        if ($request->images) {
            foreach ($request->images as $image) {
                Media::create([
                    'media_group_id' =>  $media->id,
                    'image_name' => $this->storeImage($image, 'media'),
                    'type' => Media::TYPE_IMAGE
                ]);
            }
        }
        $data['slug_en'] = str_slug($request->name_en);
        $data['slug_ar'] = slug_ar($request->name_ar);
        $media->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy($id)
    {
        $media = MediaGroup::findOrFail($id);
        foreach ($media->images as $image) {
            $this->deleteImage($image->image_name, 'media');
            $image->delete();
        }
        $media->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function deleteImg($id)
    {
        $blockImage = Media::find($id);
        $this->deleteImage($blockImage->image_name, 'media');
        $blockImage->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->back();
    }
}
