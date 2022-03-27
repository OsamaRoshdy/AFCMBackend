<?php

namespace App\Http\Controllers\FrontendV2;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\MediaGroup;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function all()
    {
        $videos = Media::videos()->active()->get();
        $mediaGroups = MediaGroup::whereHas('images')->where('id', '!=', 21)->active()->latest()->get();

        return view('frontendV2.gallery.all', compact('videos', 'mediaGroups'));
    }


    public function show($id)
    {
        $media = MediaGroup::where('slug_ar',$id)
            ->orWhere('slug_en', $id)
            ->orWhere('id', $id)
            ->first();
        if ($media) {
            $media->load('images');
            return view('frontendV2.gallery.show', compact('media', ));
        }
        abort(404);
    }
}
