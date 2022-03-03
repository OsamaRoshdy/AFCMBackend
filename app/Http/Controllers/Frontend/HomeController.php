<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\SliderGroup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliderGroup = SliderGroup::find(1)->load('sliders');

        $events = Block::where('type', Block::TYPE_EVENTS)->get();
        $news = Block::where('type', Block::TYPE_EVENTS)->get();

        return view('frontend.index', compact('sliderGroup'));
    }
}
