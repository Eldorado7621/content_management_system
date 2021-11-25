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
use App\Http\Controllers\EventDetailController;
use App\Http\Controllers\ChurchProgramController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelfareController;
use App\Http\Controllers\MeetingController;

use App\Http\Controllers\LivestreamController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmailController;







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

Route::get('/depts', function () {
    return view('dept.department_details');
});

Route::get('/contact-pastor', function () {
    return view('contact_pastor');
});


Route::post('/contact-pastor', [EmailController::class, 'sendEmail'])->name('contact-pastor');

Route::get('department-details={id}', [DepartmentController::class, 'deptDetails'])->name('department.deptDetails');
Route::get('church-welfare', [WelfareController::class, 'view_welfare'])->name('welfare.view_welfare');

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/monthlyThemeDisplay', [HomeController::class, 'monthlyTheme'])->name('monthlyThemeDisplay');

Route::get('/events', function () {
    return view('events');
});

Route::get('/ets', function () {
    return view('event.create_church_event');
});

Route::get('/ll', function () {
    return view('livestreams/go_live');
});



Route::get('/contact-pastor', function () {
    return view('contact_pastor');
});
Route::get('/login', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/live', [LivestreamController::class, 'live'])->name('livestream.live');
   

Route::post('/monthly-theme', [ThemeController::class, 'view_monthly_theme'])->name('monthly-theme.view_monthly_theme');

Route::get('/church-programs', [App\Http\Controllers\EventController::class, 'upcoming_event'])->name('upcoming_event');

Route::get('/sermons-page', [App\Http\Controllers\SermonController::class, 'view_all'])->name('sermons_page');

Route::get('/weekly-and-monthly-programs', [App\Http\Controllers\MeetingController::class, 'view_meetings'])->name('meeting.view_meetings');

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

    
    Route::apiResource('event_details', EventDetailController::class);

    Route::apiResource('church_program', ChurchProgramController::class);

    Route::apiResource('testimony', TestimonyController::class);

    Route::apiResource('contact', ContactController::class);

    Route::apiResource('welfare', WelfareController::class);

    Route::apiResource('meeting', MeetingController::class);

    Route::apiResource('livestream', LivestreamController::class);

    Route::apiResource('department', DepartmentController::class);
    Route::post('/edit-department-banner', [DepartmentController::class, 'updateBanner'])->name('department.updateBanner');
    
    
    Route::post('/stop-transmission', [LivestreamController::class, 'stop_transmission'])->name('livestream.stop_transmission');
    
    
    Route::get('/lll', [LivestreamController::class, 'go_live'])->name('go_live');


});