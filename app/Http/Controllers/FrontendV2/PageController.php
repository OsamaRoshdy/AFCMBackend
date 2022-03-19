<?php

namespace App\Http\Controllers\FrontendV2;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\FAQ;
use App\Models\Link;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($id)
    {
        $page = Block::where('slug_ar', $id)->orWhere('slug_en', $id)->orWhere('id', $id)->first();
        $link = Link::where('block_id', $page->id)->first();
        $relatedPages = Link::where('menu_link_id', $link->menu_link_id)->doesnthave('children')->get();

        if ($link->id == 17) {
            $faqs = FAQ::active()->orderBy('sort', 'asc')->get();
            return view('frontendV2.pages.faqs', compact('page', 'relatedPages', 'faqs', 'link'));
        }

        if (in_array($page->id, [54, 55,62, 63, 57], true)) {
            return view('frontendV2.pages.with_out_related', compact('page', 'link'));
        }
        return view('frontendV2.pages.show', compact('page', 'relatedPages','link') );
    }
}
