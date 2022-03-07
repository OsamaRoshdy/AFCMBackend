<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $latestNews = Block::where('type', Block::TYPE_EVENTS)->active()->latest()->take(7)->get();
        $news = Block::where('type', Block::TYPE_NEWS)->active()->whereNotIn('id', $latestNews->pluck('id')->toArray())->latest()->skip(7)->paginate(20);
        return view('frontend.global.news', compact('latestNews','news'));
    }

    public function show($slug)
    {
        $event = Block::events()->where('id', $slug)->orWhere('slug_ar', $slug)->orWhere('slug_en', $slug)->first();

        if ($event) {
            $events = Block::events()->where('id', '!=', $event->id)->latest()->take(3)->get();
            return view('frontend.events.show', compact('events','event'));
        }
        abort(404);
    }
}
