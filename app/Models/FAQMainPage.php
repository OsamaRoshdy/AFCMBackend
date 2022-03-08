<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQMainPage extends CommonModel
{
    use HasFactory;

    protected $fillable = ['faq_id', 'main_page_id'];
}
