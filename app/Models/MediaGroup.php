<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaGroup extends Model
{
    use HasFactory;

    protected $fillable = ['name_ar', 'name_en', 'slug_ar', 'slug_en','status'];

    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return app()->getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }

    public function getSlugAttribute()
    {
        return app()->getLocale() === 'en' ? $this->slug_en : $this->slug_ar;
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function images()
    {
        return $this->hasMany(Media::class);
    }

    public function mainImage()
    {
        return $this->images()->first();
    }
}
