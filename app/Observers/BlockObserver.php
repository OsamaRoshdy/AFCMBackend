<?php

namespace App\Observers;

use App\Http\Foundation\Traits\ImageTrait;
use App\Models\Block;
use Illuminate\Http\Request;

class BlockObserver
{

    use ImageTrait;

    public function created(Block $block)
    {
        if (request()->image_name) {
            $image_name = $this->storeImage(request()->image_name, 'blocks');
        }
        if (request()->images) {
            foreach (request()->images as $image) {
                $block->images()->create(['image_name' => $this->storeImage($image, 'blocks')]);
            }
        }
        $block->update([
           'image_name' => $image_name ?? $block->image_name,
           'slug_en' => str_slug($block->title_en),
           'slug_ar' => slug_ar($block->title_ar),
        ]);
    }

    /**
     * Handle the Block "updated" event.
     *
     * @param  \App\Models\Block  $block
     * @return void
     */
    public function updated(Block $block)
    {
        if (request()->image_name) {
            $image_name = $this->updateImage(request()->image_name, $block->image_name, 'blocks');
        }
        if (request()->images) {
            foreach (request()->images as $image) {
                $block->images()->create(['image_name' => $this->storeImage($image, 'blocks')]);
            }
        }
        $block->update([
            'image_name' => $image_name ?? $block->image_name,
            'slug_en' => str_slug($block->title_en),
            'slug_ar' => slug_ar($block->title_ar),
        ]);
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
