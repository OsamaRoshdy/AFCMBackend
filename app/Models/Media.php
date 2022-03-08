<?php

namespace App\Models;

use App\Http\Foundation\Classes\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends CommonModel
{
    const TYPE_IMAGE = 1;
    const TYPE_VIDEO = 2;
    const LOCATION = 'media';

    use HasFactory;

    protected $fillable = ['show_in_home', 'image_name', 'url', 'status', 'sort', 'title_ar', 'title_en', 'type', 'media_group_id'];

    protected $appends = ['image', 'title'];

    public function getImageAttribute()
    {
        return asset('storage/'. Helper::BASE_PATH . '/' . self::LOCATION . '/' . $this->image_name);
    }

    public function getTitleAttribute()
    {
        return app()->getLocale() === 'en' ? $this->title_en : $this->title_ar;
    }

    public function scopeImages($query)
    {
        $query->where('type', self::TYPE_IMAGE);
    }

    public function scopeVideos($query)
    {
        $query->where('type', self::TYPE_VIDEO);
    }

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function scopeHome($query)
    {
        $query->where('show_in_home', 1);
    }

}
