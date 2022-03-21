<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends CommonModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name_ar', 'name_en', 'status'];
    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return app()->getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }
    public function news()
    {
        return $this->belongsToMany(Block::class, 'category_blocks');
    }
}
