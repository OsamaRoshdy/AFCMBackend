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
        return view('frontend.global.news', compact('latestNews','news'));
    }
}
