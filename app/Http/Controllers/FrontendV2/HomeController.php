<?php

namespace App\Http\Controllers\FrontendV2;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Category;
use App\Models\Department;
use App\Models\MainPage;
use App\Models\Media;
use App\Models\MediaGroup;
use App\Models\Partner;
use App\Models\SliderGroup;
use App\Models\Staff;
use App\Models\Statistic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliderGroup = SliderGroup::find(1)->load('sliders');
        $events = Block::upCommingEvents()->active()->take(3)->get();
        $statistics = Statistic::active()->orderBy('sort', 'asc')->get();
        $videos = Media::videos()->active()->home()->orderBy('sort', 'asc')->take(5)->get();
        $partners = Partner::active()->home()->orderBy('sort', 'asc')->get();
        $mainPage = MainPage::find(1);
        $news = MainPage::find(1)->blocks->where('type', Block::TYPE_NEWS);
        return view('frontendV2.index', compact('sliderGroup', 'news', 'events', 'statistics', 'videos', 'partners', 'mainPage'));
    }

    public function students()
    {
        $mainPage = MainPage::find(2);
        if ($mainPage && $mainPage->status == true) {
            $faqs = $mainPage->faqs;
            $sliderGroup = SliderGroup::find(1)->load('sliders');
            $news = $mainPage->blocks->where('type', Block::TYPE_NEWS)->where('status', 1);
            return view('frontendV2.students', compact( 'faqs', 'news', 'sliderGroup'));
        }
        abort(404);
    }

    public function staff()
    {
        $mainPage = MainPage::find(3);
        if ($mainPage && $mainPage->status == true) {
            $sliderGroup = SliderGroup::find(1)->load('sliders');
            $news = MainPage::find(3)->blocks->where('type', Block::TYPE_NEWS)->where('status', 1)->take(8);
            $departments = Department::active()->orderBy('sort', 'asc')->get();
            return view('frontendV2.staff', compact('departments', 'news', 'sliderGroup'));
        }
        abort(404);
    }



}
