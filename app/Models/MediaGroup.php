<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaGroup extends Model
{
    use HasFactory;

    protected $fillable = ['name_ar', 'name_en', 'status'];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function images()
    {
        return $this->hasMany(Media::class);
    }
}
