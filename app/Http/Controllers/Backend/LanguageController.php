<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function index($lang)
    {
        Session::put('app_locale', $lang);
        return back();
    }
}
