<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPageBlock extends CommonModel
{
    use HasFactory;

    protected $fillable = ['main_page_id', 'block_id', 'sort', 'date', 'type'];

}
