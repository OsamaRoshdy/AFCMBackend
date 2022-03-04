<?php

namespace App\Models;

use App\Http\Foundation\Classes\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    const LOCATION = 'departments';

    protected $fillable = ['description_ar','description_en','name_ar','name_en', 'sort', 'image_name', 'status'];

    protected $appends = ['description', 'name','image'];

    public function getImageAttribute()
    {
        return asset('storage/'. Helper::BASE_PATH . '/' . self::LOCATION . '/' . $this->image_name);
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'en' ? $this->description_en : $this->description_ar;
    }

    public function getNameAttribute()
    {
        return app()->getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }

    public function scopeActive()
    {
        return $this->where('status', true);
    }

}
