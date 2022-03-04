<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index']);

Route::get('students', [\App\Http\Controllers\Frontend\HomeController::class, 'students']);

Route::get('staff', [\App\Http\Controllers\Frontend\HomeController::class, 'staff']);

Route::get('contact_us', [\App\Http\Controllers\Frontend\HomeController::class, 'contact_us']);




Route::get('switch/{lang}', function ($lang) {
    Session::put('app_locale', $lang);
    return back();
})->name('switchLang');
