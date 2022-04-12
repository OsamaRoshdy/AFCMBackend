<?php

namespace App\Http\Controllers\FrontendV2;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\FAQ;
use App\Models\Link;
use App\Models\SliderGroup;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($id)
    {
        $page = Block::where('slug_ar', $id)->orWhere('slug_en', $id)->orWhere('id', $id)->first();
        if ($page) {
            $link = Link::where('block_id', $page->id)->first();
            $relatedPages = Link::where('menu_link_id', $link->menu_link_id)->doesnthave('children')->get();

            if ($page->id == 51) {
                return view('frontendV2.pages.howToApply', compact('page', 'relatedPages', 'link'));
            }

            if ($link->id == 17) {
                $faqs = FAQ::active()->orderBy('sort', 'asc')->get();
                return view('frontendV2.pages.faqs', compact('page', 'relatedPages', 'faqs', 'link'));
            }

            if ($page->id == 60 || $page->id == 61) {
                if ($page->id == 60 ) {
                    $sliderGroup = SliderGroup::find(4)->load('sliders');
                } else {
                    $sliderGroup = SliderGroup::find(5)->load('sliders');
                }
                return view('frontendV2.pages.partners', compact('page', 'relatedPages', 'link', 'sliderGroup'));
            }

            if (in_array($page->id, [54, 55,62, 63, 57], true)) {
                return view('frontendV2.pages.with_out_related', compact('page', 'link'));
            }
            return view('frontendV2.pages.show', compact('page', 'relatedPages','link') );
        }
        abort(404);
    }
}
