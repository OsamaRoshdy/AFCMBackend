<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends CommonModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name_ar', 'name_en', 'status'];

    public function news()
    {
        return $this->belongsToMany(Block::class, 'category_blocks');
    }
}
