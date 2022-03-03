<?php

namespace App\Models;

use App\Http\Foundation\Classes\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    const LOCATION = 'sliders';

    protected $fillable = ['description_ar','description_en', 'slider_group_id', 'sort', 'image_name', 'status'];

    protected $appends = ['description', 'image'];

    public function sliderGroup()
    {
        return $this->belongsTo(SliderGroup::class);
    }

    public function getImageAttribute()
    {
        return asset('storage/'. Helper::BASE_PATH . '/' . self::LOCATION . '/' . $this->image_name);
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'en' ? $this->description_en : $this->description_ar;
    }

}
