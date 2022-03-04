<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Foundation\Traits\ImageTrait;
use App\Models\Media;
use Illuminate\Http\Request;

class ImageController extends CommonController
{
    use ImageTrait;
    protected string $module = 'images';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Media::images()->latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
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
            'image_name' => 'required',
        ]);
        $data = $request->except(['image_name']);
        $data['image_name'] = $this->storeImage($request->image_name, 'media');
        $data['type'] = Media::TYPE_IMAGE;
        Media::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit($id)
    {
        $image = Media::findOrFail($id);
        return view('backend.' . $this->module . '.edit', compact('image'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,$id)
    {
        $image = Media::findOrFail($id);
        $data = $request->except(['image_name']);
        if ($request->image_name) {
            $data['image_name'] = $this->updateImage($request->image_name, $image->image_name,'media');
        }
        $image->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy($id)
    {
        $image = Media::findOrFail($id);
        $this->deleteImage($image->image_name, 'media');
        $image->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
