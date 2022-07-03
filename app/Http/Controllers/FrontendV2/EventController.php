<?php

namespace App\Http\Controllers\FrontendV2;

use App\Http\Controllers\Controller;
use App\Models\Block;

class EventController extends Controller
{
    public function show($slug)
    {
        $event = Block::events()->where('id', $slug)->orWhere('slug_ar', $slug)->orWhere('slug_en', $slug)->first();

        if ($event) {
            $events = Block::events()->where('id', '!=', $event->id)->latest()->take(3)->get();
            return view('frontendV2.events.show', compact('events','event'));
        }
        abort(404);
    }
}
