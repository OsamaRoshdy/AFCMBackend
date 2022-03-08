<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderGroup extends CommonModel
{
    use HasFactory;

    protected $fillable = ['name', 'main_page_id', 'status'];

    public function mainPage()
    {
        return $this->belongsTo(MainPage::class);
    }

    public function sliders()
    {
        return $this->hasMany(Slider::class)->orderBy('sort', 'asc');
    }
}
