<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $latestNews = Block::where('type', Block::TYPE_NEWS)->active()->latest()->take(7)->get();
        $news = Block::where('type', Block::TYPE_NEWS)->active()->whereNotIn('id', $latestNews->pluck('id')->toArray())->latest()->skip(7)->paginate(20);
        $events = Block::upCommingEvents()->active()->take(2)->get();
        return view('frontend.global.news', compact('latestNews','news', 'events'));
    }

    public function show($slug)
    {
        $new = Block::news()->where([
            'id' => $slug,
        ])->first();

        if ($new) {
            $relatedNews = Block::news()->whereHas('categories', function ($query) use ($new){
                $query->whereIn('category_id', $new->categories->pluck('id')->toArray());
            })->where('id', '!=', $new->id)->take(3)->get();
            return view('frontend.global.new', compact('relatedNews','new'));
        }
        abort(404);
    }

    public function byCategory($id)
    {
        $news = Block::news()->whereHas('categories', function ($query) use ($id){
            $query->where('category_id', $id);
        })->paginate(20);

        return view('frontend.global.byCategory', compact('news'));
    }
}
