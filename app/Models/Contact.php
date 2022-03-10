<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    const SUBSCRIBE = 1;
    const CONTACT = 2;

    protected $fillable = ['name', 'email', 'message', 'type'];
}
