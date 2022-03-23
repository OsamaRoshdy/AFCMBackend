<?php

namespace App\Http\Controllers\FrontendV2;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Category;
use App\Models\MainPage;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function all()
    {

        $page = MainPage::find(1);
        $news = Block::where('type', Block::TYPE_NEWS)->active();
        if (\request()->p) {
            if (\request()->p == 3) {

                $news->whereDoesntHave('categories', function ($query) {
                    $query->where('category_id', '!=',  3);
                })->whereHas('blockMainPages', function ($query) {
                    $query->whereHas('mainPage', function ($subQuery) {
                        $subQuery->where('id', request()->p);
                    });
                });
            } else {
                $news->whereHas('blockMainPages', function ($query) {
                    $query->whereHas('mainPage', function ($subQuery) {
                        $subQuery->where('id', request()->p);
                    });
                });
            }
            $mainPage = MainPage::find(\request()->p);
            if ($mainPage) {
                $page = $mainPage;
            }
        }
        $news = $news->latest()->paginate(20);
        $events = Block::upCommingEvents()->active()->take(2)->get();
        return view('frontendV2.news.all', compact('news', 'events', 'page'));
    }

    public function show($slug)
    {
        $new = Block::news()
            ->where('id' , $slug)
            ->orWhere('slug_ar' , $slug)
            ->orWhere('slug_en' , $slug)
            ->first();

        if ($new) {
            $relatedNews = Block::news()->whereHas('categories', function ($query) use ($new){
                $query->whereIn('category_id', $new->categories->pluck('id')->toArray());
            })->where('id', '!=', $new->id)->take(4)->get();
            if (!$relatedNews->count()) {
                $relatedNews = Block::news()->active()->where('id', '!=', $new->id)->take(4)->get();
            }
            return view('frontendV2.news.show', compact('relatedNews','new'));
        }
        abort(404);
    }

    public function byCategory($id)
    {
        $page = MainPage::find(1);
        if ($id == 6 || $id == 4) {
            $page = MainPage::find(3);
        }
        $news = Block::news()->whereHas('categories', function ($query) use ($id){
            $query->where('category_id', $id);
        })->paginate(20);

        $category = Category::findOrFail($id);
        return view('frontendV2.news.byCategory', compact('news', 'category', 'page'));
    }
}
