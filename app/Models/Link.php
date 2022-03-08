<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends CommonModel
{
    use HasFactory;

    const TYPE_INTERNAL= 1;
    const TYPE_EXTERNAL = 2;

    protected $fillable = ['name_ar', 'name_en', 'status', 'sort' ,'route', 'menu_link_id', 'block_id', 'link_id', 'type'];

    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return app()->getLocale() === 'en' ? $this->name_en : $this->name_ar;
    }

    public function menuLink()
    {
        return $this->belongsTo(MenuLinks::class);
    }

    public function parent()
    {
        return $this->belongsTo(__CLASS__, 'link_id');
    }

    public function children()
    {
        return $this->hasMany(__CLASS__, 'link_id')->orderBy('sort', 'ASC');
    }

    public function hasChildren()
    {
        return $this->children()->exists();
    }

    public function scopeParents()
    {
        return $this->where('link_id', null);
    }

    public function scopeActive()
    {
        return $this->where('status', 1);
    }

}
