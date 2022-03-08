<?php

namespace App\Models;

use App\Http\Foundation\Classes\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockImage extends CommonModel
{
    use HasFactory;

    const LOCATION = 'blocks'; // section

    protected $fillable = ['image_name', 'block_id'];
    protected $appends = ['image'];

    public function block()
    {
        return $this->belongsTo(Block::class);
    }

    public function getImageAttribute()
    {
        return asset('storage/'. Helper::BASE_PATH . '/' . self::LOCATION . '/' . $this->image_name);
    }
}
