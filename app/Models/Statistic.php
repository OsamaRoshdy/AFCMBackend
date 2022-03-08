<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends CommonModel
{
    use HasFactory;

    protected $fillable = ['name_ar', 'name_en', 'status', 'sort', 'icon', 'count'];

    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return app()->getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

}
