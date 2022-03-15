<?php

namespace App\Models;

use App\Http\Foundation\Classes\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends CommonModel
{
    use HasFactory;

    const LOCATION = 'partners';
    const NATIONAL = 1;
    const INTERNATIONAL = 2;

    protected $fillable = ['name_ar', 'name_en','description_ar', 'description_en', 'image_name', 'status','sort', 'type',  'show_in_home', 'show_in_footer'];

    protected $appends = ['name', 'description', 'image'];


    public function getImageAttribute()
    {
        return asset('storage/'. Helper::BASE_PATH . '/' . self::LOCATION . '/' . $this->image_name);
    }

    public function getNameAttribute()
    {
        return app()->getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'en' ? $this->description_en : $this->description_ar;
    }

    public function scopeHome($query)
    {
        $query->where('show_in_home', 1);
    }

    public function scopeFooter($query)
    {
        $query->where('show_in_footer', 1);
    }

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

}
