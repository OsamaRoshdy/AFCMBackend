<?php

namespace App\Observers;

use App\Http\Foundation\Traits\ImageTrait;
use App\Models\Block;
use Illuminate\Http\Request;

class BlockObserver
{
    use ImageTrait;

    public function creating(Block $block)
    {
        $block->slug_en = str_slug($block->title_en);
        $block->slug_ar = slug_ar($block->title_ar);
    }
}
