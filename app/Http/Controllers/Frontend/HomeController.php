<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Category;
use App\Models\Department;
use App\Models\FAQ;
use App\Models\Link;
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

        $events = Block::upCommingEvents()->active()->take(2)->get();
        $statistics = Statistic::active()->orderBy('sort', 'asc')->get();
        $videos = Media::videos()->active()->home()->orderBy('sort', 'asc')->take(3)->get();
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
            $sliderGroup = SliderGroup::find(1)->load('sliders');
            return view('frontend.students.index', compact('services', 'faqs', 'news', 'sliderGroup'));
        }
        abort(404);
    }

    public function staff()
    {
        $mainPage = MainPage::find(3);
        if ($mainPage && $mainPage->status == true) {
            $sliderGroup = SliderGroup::find(1)->load('sliders');

            $news = MainPage::find(3)->blocks->where('type', Block::TYPE_NEWS);
            $departments = Department::active()->orderBy('sort', 'asc')->get();
            $staff = Staff::active()->orderBy('sort', 'asc')->get();
            return view('frontend.staff.index', compact('departments', 'news', 'staff', 'sliderGroup'));
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
        $mediaGroups = MediaGroup::whereHas('images')->active()->latest()->get();
        return view('frontend.global.gallery', compact('videos', 'mediaGroups'));

    }

    public function media($id)
    {
        $media = MediaGroup::where('slug_ar',$id)
            ->orWhere('slug_en', $id)
            ->orWhere('id', $id)
            ->first();
        if ($media) {
            $media->load('images');
            return view('frontend.global.media', compact('media'));
        }
        abort(404);

    }

    public function page($id)
    {

        $page = Block::where('slug_ar', $id)->orWhere('slug_en', $id)->orWhere('id', $id)->first();
        $link = Link::where('block_id', $page->id)->first();
        $relatedPages = Link::where('menu_link_id', $link->menu_link_id)->doesnthave('children')->get();

        if($link->id == 31 || $link->id == 32) {
            $type = $link->id == 31 ? Partner::INTERNATIONAL : Partner::NATIONAL;
            $partners = Partner::where('type', $type)->active()->latest()->get();
            return view('frontend.pages.protocols', compact('page', 'relatedPages', 'partners'));
        }

        if ($link->id == 36) { //Jobs

            $jobs = Block::where('type', Block::TYPE_JOBS)->active()->latest()->get();
            return view('frontend.pages.jobs', compact('page', 'relatedPages', 'jobs'));
        }

        if ($link->id == 17) { //FAQs

            $faqs = FAQ::active()->orderBy('sort', 'asc')->get();
            return view('frontend.pages.faqs', compact('page', 'relatedPages', 'faqs'));
        }

        if (in_array($page->id, [54, 55,62, 63, 57], true)) { //FAQs
            return view('frontend.pages.with_out_related', compact('page'));
        }

        return view('frontend.pages.global', compact('page', 'relatedPages'));
    }

    public function search(Request $request)
    {
        $news = Block::where('type', Block::TYPE_NEWS)
            ->where('title_en', 'like', '%' . $request->search . '%')
            ->orWhere('title_ar', 'like', '%' . $request->search . '%')
            ->get();

        $events = Block::where('type', Block::TYPE_EVENTS)
            ->where('title_en', 'like', '%' . $request->search . '%')
            ->orWhere('title_ar', 'like', '%' . $request->search . '%')
            ->get();

        return view('frontend.global.search', compact('news', 'events'));
    }
}
