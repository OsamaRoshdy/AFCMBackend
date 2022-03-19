<?php

namespace App\Models;

use App\Http\Foundation\Classes\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Block extends CommonModel
{
    use HasFactory, SoftDeletes;

    const LOCATION = 'blocks'; // section
    const TYPE_SECTIONS = 1; // section
    const TYPE_NEWS = 2; // section
    const TYPE_EVENTS = 3; // section
    const TYPE_PAGES = 4; // section
    const TYPE_JOBS = 5; // section

    protected $appends = ['title', 'slug', 'description', 'content', 'image', 'button'];

//    protected $casts = ['date' => 'date'];
    protected $fillable = [
        'slug_en', 'slug_ar',
        'title_en', 'title_ar',
        'button_en', 'button_ar',
        'description_en', 'description_ar',
        'content_en', 'content_ar',
        'image_name', 'status', 'date',
        'type', 'unique_name', 'sort'
    ];

    public function getImageAttribute()
    {
        return asset('storage/'. Helper::BASE_PATH . '/' . self::LOCATION . '/' . $this->image_name);
    }

    public function getTitleAttribute()
    {
        return app()->getLocale() === 'en' ? $this->title_en : $this->title_ar;
    }

    public function getButtonAttribute()
    {
        return app()->getLocale() === 'en' ? $this->button_en : $this->button_ar;
    }

    public function getDateAttribute()
    {
        return $this->attributes['date'] = $this->attributes['date'];
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

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_blocks')->withPivot('type', 'date', 'sort');
    }

    public function blockCategories()
    {
        return $this->hasMany(CategoryBlock::class);
    }

    public function mainPages()
    {
        return $this->belongsToMany(MainPage::class, 'main_page_blocks')->withPivot('type', 'date', 'sort');
    }

    public function blockMainPages()
    {
        return $this->hasMany(MainPageBlock::class);
    }

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }
    public function scopeNews($query)
    {
        $query->where('type', self::TYPE_NEWS);
    }
    public function scopeEvents($query)
    {
        $query->where('type', self::TYPE_EVENTS);
    }

    public function scopeUpCommingEvents($query)
    {
        $query->where('type', self::TYPE_EVENTS)->where('date', '>', today());
    }
}
