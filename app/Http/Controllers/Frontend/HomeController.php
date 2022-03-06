<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Category;
use App\Models\Department;
use App\Models\MainPage;
use App\Models\Media;
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
        $videos = Media::videos()->active()->home()->orderBy('sort', 'asc')->get();
        $partners = Partner::active()->home()->orderBy('sort', 'asc')->get();
        $mainPage = MainPage::find(1);
        $news = MainPage::find(1)->blocks->where('type', Block::TYPE_NEWS);

        return view('frontend.index', compact('sliderGroup', 'events', 'statistics', 'videos', 'partners', 'mainPage', 'news'));
    }

    public function students()
    {
        $mainPage = MainPage::find(2);
        if ($mainPage && $mainPage->status == true) {
            $services = Category::find(5)->news;
            $faqs = $mainPage->faqs;
            $news = $mainPage->blocks->where('type', Block::TYPE_NEWS);
            return view('frontend.students.index', compact('services', 'faqs', 'news'));
        }
        abort(404);
    }

    public function staff()
    {
        $mainPage = MainPage::find(3);
        if ($mainPage && $mainPage->status == true) {
            $news = MainPage::find(3)->blocks->where('type', Block::TYPE_NEWS);
            $departments = Department::active()->orderBy('sort', 'asc')->get();
            $staff = Staff::active()->orderBy('sort', 'asc')->get();
            return view('frontend.staff.index', compact('departments', 'news', 'staff'));
        }
        abort(404);
    }

    public function contact_us()
    {
        $mainPage = MainPage::find(4);
        if ($mainPage && $mainPage->status == true) {

            return view('frontend.global.contact-us');
        }
        abort(404);
    }

    public function gallery()
    {
        $videos = Media::videos()->active()->get();
        $images = Media::images()->active()->latest()->paginate(20);
        return view('frontend.global.gallery', compact('videos', 'images'));

    }

    public function page($id)
    {
        $page = Block::where('slug_ar', $id)->orWhere('slug_en', $id)->orWhere('id', $id)->first();
        return view('frontend.pages.global', compact('page'));
    }
}
