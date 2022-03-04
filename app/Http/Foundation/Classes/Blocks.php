<?php

namespace App\Http\Foundation\Classes;

use App\Http\Foundation\Traits\ImageTrait;
use App\Models\Block;

class Blocks
{
    use ImageTrait;

    public function afterCreate(Block $block)
    {
        $block->slug_en = str_slug($block->title_en);
        $block->slug_ar = slug_ar($block->title_ar);
        $block->image_name = $this->storeImage(request()->image_name, 'blocks');
        $block->save();
        if (request()->images) {
            foreach (request()->images as $image) {
                $block->images()->create(['image_name' => $this->storeImage($image, 'blocks')]);
            }
        }
    }

    public function afterUpdate(Block $block)
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
        $block->save();

    }

    public function beforeDelete(Block $block)
    {
        if ($block->images) {
            foreach ($block->images as $image) {
                $this->deleteImage($image->image_name, 'blocks');
                $image->delete();
            }
        }
        $this->deleteImage($block->image_name, 'blocks');
    }
}
