<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPage extends CommonModel
{
    use HasFactory, Sluggable;

    protected $fillable = ['name_ar', 'name_en', 'status'];

    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return app()->getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name_en',
                'onUpdate' => true
            ]
        ];
    }

    public function blocks()
    {
        return $this->belongsToMany(Block::class, 'main_page_blocks')->latest();
    }

    public function news()
    {
        return $this->blocks()->where('type', Block::TYPE_NEWS);
    }

    public function events()
    {
        return $this->blocks->where('type', Block::TYPE_EVENTS);
    }

    public function pages()
    {
        return $this->blocks->where('type', Block::TYPE_PAGES);
    }

    public function faqs()
    {
        return $this->belongsToMany(FAQ::class, 'f_a_q_main_pages', 'main_page_id','faq_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
