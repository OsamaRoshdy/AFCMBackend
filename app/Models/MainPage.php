<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['name_ar', 'name_en', 'status'];

    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return app()->getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name_en',
                'onUpdate' => true
            ]
        ];
    }
}
