<?php

namespace App\Models;

use App\Http\Foundation\Classes\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Block extends Model
{
    use HasFactory, SoftDeletes;

    const LOCATION = 'blocks'; // section
    const TYPE_SECTIONS = 1; // section
    const TYPE_NEWS = 2; // section
    const TYPE_EVENTS = 3; // section
    const TYPE_PAGES = 4; // section

    protected $appends = ['title', 'slug', 'description', 'content', 'image'];

    protected $fillable = [
        'slug_en', 'slug_ar',
        'title_en', 'title_ar',
        'description_en', 'description_ar',
        'content_en', 'content_ar',
        'image_name', 'status', 'date',
        'type', 'category_id'
    ];

    public function getImageAttribute()
    {
        return asset('storage/'. Helper::BASE_PATH . '/' . self::LOCATION . '/' . $this->image_name);
    }

    public function getTitleAttribute()
    {
        return app()->getLocale() === 'en' ? $this->title_en : $this->title_ar;
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'en' ? $this->description_en : $this->description_ar;
    }

    public function getContentAttribute()
    {
        return app()->getLocale() === 'en' ? $this->content_en : $this->content_ar;
    }

    public function getSlugAttribute()
    {
        return app()->getLocale() === 'en' ? $this->slug_en : $this->slug_ar;
    }


    public function images()
    {
        return $this->hasMany(BlockImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
