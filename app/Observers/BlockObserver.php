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
//        $block->image_name = $this->storeImage(request()->image_name, 'blocks');
    }


    public function created(Block $block)
    {
        if (request()->images) {
            foreach (request()->images as $image) {
                $block->images()->create(['image_name' => $this->storeImage($image, 'blocks')]);
            }
        }
    }



    public function updateing(Block $block)
    {
        if (request()->images) {
            foreach (request()->images as $image) {
                $block->images()->create(['image_name' => $this->storeImage($image, 'blocks')]);
            }
        }
        $block->slug_en = str_slug($block->title_en);
        $block->slug_ar = slug_ar($block->title_ar);
        if (request()->image_name) {
            $block->image_name = $this->updateImage(request()->image_name, $block->image_name, 'blocks');
        }
    }


    /**
     * Handle the Block "updated" event.
     *
     * @param  \App\Models\Block  $block
     * @return void
     */
    public function updated(Block $block)
    {
        if (request()->images) {
            foreach (request()->images as $image) {
                $block->images()->create(['image_name' => $this->storeImage($image, 'blocks')]);
            }
        }
        $block->slug_en = str_slug($block->title_en);
        $block->slug_ar = str_slug($block->title_ar);
        if (request()->image_name) {
            $block->image_name = $this->updateImage(request()->image_name, $block->image_name, 'blocks');
        }
        $block->save();
    }

    /**
     * Handle the Block "deleted" event.
     *
     * @param  \App\Models\Block  $block
     * @return void
     */
    public function deleted(Block $block)
    {
        if ($block->images) {
            foreach ($block->images as $image) {
                $this->deleteImage($image->image_name, 'blocks');
                $image->delete();
            }
        }
        $this->deleteImage($block->image_name, 'blocks');
    }

    /**
     * Handle the Block "restored" event.
     *
     * @param  \App\Models\Block  $block
     * @return void
     */
    public function restored(Block $block)
    {
        //
    }

    /**
     * Handle the Block "force deleted" event.
     *
     * @param  \App\Models\Block  $block
     * @return void
     */
    public function forceDeleted(Block $block)
    {
        //
    }
}
