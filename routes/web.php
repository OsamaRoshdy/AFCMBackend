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
Route::get('gallery', [\App\Http\Controllers\Frontend\HomeController::class, 'gallery']);
Route::get('media/{media}', [\App\Http\Controllers\Frontend\HomeController::class, 'media']);

Route::get('contact-us', [\App\Http\Controllers\Frontend\HomeController::class, 'contact_us']);
Route::post('subscribe', [\App\Http\Controllers\Frontend\ContactController::class, 'subscribe'])->name('subscribe');
Route::post('contact-us/store', [\App\Http\Controllers\Frontend\ContactController::class, 'contact_us'])->name('contact_us.store');
Route::get('search', [\App\Http\Controllers\Frontend\HomeController::class, 'search'])->name('search');


Route::get('news', [\App\Http\Controllers\Frontend\NewsController::class, 'index']);
Route::get('news/{new}', [\App\Http\Controllers\Frontend\NewsController::class, 'show']);
Route::get('categories/{category}', [\App\Http\Controllers\Frontend\NewsController::class, 'byCategory']);



Route::get('events', [\App\Http\Controllers\Frontend\EventsController::class, 'index']);
Route::get('events/{event}', [\App\Http\Controllers\Frontend\EventsController::class, 'show']);


Route::get('pages/{page}', [\App\Http\Controllers\Frontend\HomeController::class, 'page']);


Route::get('jobs/{id}', [\App\Http\Controllers\Frontend\JobController::class, 'index']);
Route::post('jobs/{id}/apply', [\App\Http\Controllers\Frontend\JobController::class, 'store'])->name('jobApply');

Route::get('switch/{lang}', function ($lang) {
    Session::put('app_locale', $lang);
    return back();
})->name('switchLang');
