<?php

namespace App\Models;

use App\Http\Foundation\Classes\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    const LOCATION = 'staff';

    protected $fillable = ['full_name_ar', 'full_name_en', 'title_ar', 'title_en', 'sort', 'status', 'image_name'];

    protected $appends = ['image', 'title', 'full_name'];

    public function getFullNameAttribute()
    {
        return app()->getLocale() === 'en' ? $this->full_name_en : $this->full_name_ar;
    }

    public function getTitleAttribute()
    {
        return app()->getLocale() === 'en' ? $this->title_en : $this->title_ar;
    }

    public function getImageAttribute()
    {
        return asset('storage/'. Helper::BASE_PATH . '/' . self::LOCATION . '/' . $this->image_name);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
