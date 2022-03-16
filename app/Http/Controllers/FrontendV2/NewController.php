<?php

namespace App\Http\Controllers\FrontendV2;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function all()
    {
        $latestNews = Block::where('type', Block::TYPE_NEWS)->active()->latest()->take(7)->get();
        $news = Block::where('type', Block::TYPE_NEWS)->active()->latest()->paginate(20);
        $events = Block::upCommingEvents()->active()->take(2)->get();
        return view('frontendV2.news.all', compact('latestNews','news', 'events'));
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
        $news = Block::news()->whereHas('categories', function ($query) use ($id){
            $query->where('category_id', $id);
        })->paginate(20);

        return view('frontendV2.news.all', compact('news'));
    }
}
