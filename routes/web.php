<?php

use App\Models\Block;
use App\Models\Department;
use App\Models\MainPage;
use App\Models\SliderGroup;
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

Route::get('/', [\App\Http\Controllers\FrontendV2\HomeController::class, 'index']);
Route::get('students', [\App\Http\Controllers\FrontendV2\HomeController::class, 'students']);
Route::get('staff', [\App\Http\Controllers\FrontendV2\HomeController::class, 'staff']);
Route::get('contact-us', [\App\Http\Controllers\FrontendV2\HomeController::class, 'contact_us']);




Route::get('gallery', [\App\Http\Controllers\FrontendV2\MediaController::class, 'all']);
Route::get('media/{media}', [\App\Http\Controllers\FrontendV2\MediaController::class, 'show']);



Route::get('news', [\App\Http\Controllers\FrontendV2\NewController::class, 'all']);
Route::get('news/{new}', [\App\Http\Controllers\FrontendV2\NewController::class, 'show']);
Route::get('categories/{category}', [\App\Http\Controllers\FrontendV2\NewController::class, 'byCategory']);



Route::get('events', [\App\Http\Controllers\Frontend\EventsController::class, 'index']);
Route::get('events/{event}', [\App\Http\Controllers\Frontend\EventsController::class, 'show']);


Route::get('pages/{page}', [\App\Http\Controllers\FrontendV2\PageController::class, 'show']);



Route::get('switch/{lang}', function ($lang) {
    Session::put('app_locale', $lang);
    return back();
})->name('switchLang');

Route::get('/v2', function () {
    $sliderGroup = SliderGroup::find(1)->load('sliders');
    $news = MainPage::find(1)->blocks->where('type', Block::TYPE_NEWS)->take(3);
    $events = Block::upCommingEvents()->active()->take(3)->get();

    return view('frontendV2.index', compact('sliderGroup', 'news', 'events'));
});


Route::get('/v2/staff', function () {
    $sliderGroup = SliderGroup::find(1)->load('sliders');
    $news = MainPage::find(1)->blocks->where('type', Block::TYPE_NEWS)->take(3);
    $events = Block::upCommingEvents()->active()->take(3)->get();

    $departments = Department::active()->orderBy('sort', 'asc')->get();

    return view('frontendV2.staff', compact('sliderGroup', 'news', 'events', 'departments'));
});


Route::get('/v2/students', function () {
    $sliderGroup = SliderGroup::find(1)->load('sliders');
    $news = MainPage::find(1)->blocks->where('type', Block::TYPE_NEWS)->take(3);
    $events = Block::upCommingEvents()->active()->take(3)->get();

    $departments = Department::active()->orderBy('sort', 'asc')->get();

    return view('frontendV2.students', compact('sliderGroup', 'news', 'events', 'departments'));
});


Route::get('/v2/contact_us', function () {
    return view('frontendV2.contact_us');
});

