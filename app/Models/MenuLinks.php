<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;use Illuminate\Database\Eloquent\Relations\BelongsTo;


class MenuLinks extends CommonModel
{
    use HasFactory;

    protected $fillable = ['main_page_id', 'name_ar', 'name_en', 'status'];

    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return app()->getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }

    public function mainPage() :belongsTo
    {
        return $this->belongsTo(MainPage::class);
    }
}
