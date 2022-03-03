<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\SliderGroup;
use App\Models\Statistic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliderGroup = SliderGroup::find(1)->load('sliders');

        $events = Block::upCommingEvents()->active()->get();
        $statistics = Statistic::active()->orderBy('sort', 'asc')->get();

        return view('frontend.index', compact('sliderGroup', 'events', 'statistics'));
    }
}
