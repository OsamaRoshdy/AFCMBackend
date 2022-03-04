<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\MainPage;
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

    public function students()
    {
        $mainPage = MainPage::find(2);
        if ($mainPage && $mainPage->status == true) {

            return view('frontend.students.index');
        }
        abort(404);
    }

    public function staff()
    {
        $mainPage = MainPage::find(3);
        if ($mainPage && $mainPage->status == true) {

            return view('frontend.staff.index');
        }
        abort(404);
    }

    public function contact_us()
    {
        $mainPage = MainPage::find(4);
        if ($mainPage && $mainPage->status == true) {

            return view('frontend.global.index');
        }
        abort(404);
    }
}
