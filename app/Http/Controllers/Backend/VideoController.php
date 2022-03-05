<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class VideoController extends CommonController
{
    protected string $module = 'videos';

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->makeDatatable(Media::videos()->latest(),$this->module, true);
        }
        $columns = [
            'id' => ['title' => 'ID', 'searchable' => false, 'orderable' => true],
            'url' => ['title' => __('common.url'), 'searchable' => true, 'orderable' => true],
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
            'url' => 'required',
        ]);
        $data = $request->except(['image_name']);
        $data['type'] = Media::TYPE_VIDEO;
        Media::create($data);
        toast(__('common.added_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function edit($id)
    {
        $video = Media::findOrFail($id);
        return view('backend.' . $this->module . '.edit', compact('video'))
            ->with(['module' => $this->module, 'action' => 'edit']);
    }

    public function update(Request $request,$id)
    {
        $video = Media::findOrFail($id);
        $data = $request->except(['image_name']);
        $video->update($data);
        toast(__('common.updated_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }

    public function destroy($id)
    {
        $video = Media::findOrFail($id);
        $video->delete();
        toast(__('common.deleted_successfully'),'success','top-right');
        return redirect()->route('dashboard.' . $this->module . '.index');
    }
}
