<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutvideoController;
use App\Http\Controllers\ThemeController;

use App\Http\Controllers\SermonController;
use App\Http\Controllers\EventController;


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


Route::get('/ff', function () {
    return view('livestream');
});



Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/events', function () {
    return view('events');
});

Route::get('/ets', function () {
    return view('event.create_church_event');
});

Route::get('/livestream', function () {
    return view('livestream');
});

Route::get('/contact-pastor', function () {
    return view('contact_pastor');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/sermons-page', function () {
    return view('sermon.sermons_page');
});

Auth::routes();



Route::get('/sermons-page', [App\Http\Controllers\SermonController::class, 'view_all'])->name('sermons_page');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::apiResource('banners', BannerController::class);
    Route::apiResource('users', UserController::class);

    Route::get('create-user', [HomeController::class, 'create_user'])->name('create_user');

    Route::apiResource('about', AboutController::class);
    Route::apiResource('aboutvideo', AboutvideoController::class);

    Route::apiResource('monthly-theme', ThemeController::class);

    Route::apiResource('sermon', SermonController::class);

    Route::apiResource('event', EventController::class);

    Route::get('create-event', [EventController::class, 'create_event'])->name('event.create_event');
    



});