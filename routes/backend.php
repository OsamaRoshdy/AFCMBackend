<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\FAQController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\MetaController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\PaymentMethodController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SpecialAdsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminAuthController;
use Illuminate\Support\Facades\Config;

Config::set('auth.defines', 'admin');
Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
Route::post('/login', [AdminAuthController::class, 'doLogin'])->name('doLogin');

Route::group(['middleware' => 'admin:admin'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::resource('admins', AdminController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::get('roles/{role}/attachPermissions', [RoleController::class, 'attachPermissions'])
        ->name('roles.attachPermissions');
    Route::patch('roles/{role}/attachPermissions', [RoleController::class, 'storeAttachPermissions'])
        ->name('roles.storeAttachPermissions');

    Route::resource('main_pages', \App\Http\Controllers\Backend\MainPageController::class);
    Route::resource('menu_links', \App\Http\Controllers\Backend\MenuLinksController::class);
    Route::resource('categories', \App\Http\Controllers\Backend\CategoryController::class);
    Route::resource('news', \App\Http\Controllers\Backend\NewsController::class);
    Route::resource('events', \App\Http\Controllers\Backend\EventController::class);
    Route::resource('sections', \App\Http\Controllers\Backend\SectionController::class);
    Route::resource('pages', \App\Http\Controllers\Backend\PageController::class);
    Route::resource('pages_images', \App\Http\Controllers\Backend\PageImageController::class);
    Route::resource('staff', \App\Http\Controllers\Backend\StaffController::class);
    Route::resource('faqs', \App\Http\Controllers\Backend\FAQController::class);
    Route::resource('jobs', \App\Http\Controllers\Backend\JobController::class);
    Route::delete('block_images/{block_images}', [\App\Http\Controllers\Backend\NewsController::class, 'deleteBlockImage'])->name('block_images.destroy');


    Route::resource('slider_groups', \App\Http\Controllers\Backend\SliderGroupController::class);
    Route::resource('sliders', \App\Http\Controllers\Backend\SliderController::class);
    Route::resource('statistics', \App\Http\Controllers\Backend\StatisticController::class);
    Route::resource('departments', \App\Http\Controllers\Backend\DepartmentController::class);
    Route::resource('partners', \App\Http\Controllers\Backend\PartnerController::class);
    Route::resource('videos', \App\Http\Controllers\Backend\VideoController::class);
    Route::resource('images', \App\Http\Controllers\Backend\ImageController::class);
    Route::delete('images/media/{image}', [\App\Http\Controllers\Backend\ImageController::class, 'deleteImg'])->name('media.deleteImg');
//    Route::resource('media', \App\Http\Controllers\Backend\MediaController::class);


    Route::resource('menu_links/{menu_link}/links', \App\Http\Controllers\Backend\LinksController::class)->except(['show', 'edit', 'update', 'destroy']);
    Route::post('menu_links/{menu_link}/links', [\App\Http\Controllers\Backend\LinksController::class, 'store'])->name('links.store');
    Route::get('menu_links/links/{link}/edit', [\App\Http\Controllers\Backend\LinksController::class, 'edit'])->name('links.edit');
    Route::get('menu_links/links/{link}', [\App\Http\Controllers\Backend\LinksController::class, 'edit'])->name('links.show');
    Route::patch('menu_links/links/{link}', [\App\Http\Controllers\Backend\LinksController::class, 'update'])->name('links.update');
    Route::delete('menu_links/links/{link}', [\App\Http\Controllers\Backend\LinksController::class, 'destroy'])->name('links.destroy');


//    Route::resource('categories', CategoryController::class);


    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

});
