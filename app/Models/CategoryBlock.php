<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlock extends CommonModel
{
    use HasFactory;

    protected $fillable = ['category_id', 'block_id', 'sort', 'date', 'type'];
}

