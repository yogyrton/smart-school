<?php

use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Page\DreamlandCampController;
use App\Http\Controllers\Page\GeorgiaCampController;
use App\Http\Controllers\Page\JukovLugController;
use App\Http\Controllers\Page\MainPageController;
use App\Http\Controllers\Page\SchoolBelarusController;
use App\Http\Controllers\Page\SchoolBelarus1_4Controller;
use App\Http\Controllers\Page\SchoolBelarus5_11Controller;
use App\Http\Controllers\Page\OnlineSchoolController;
use App\Http\Controllers\Page\SchoolRussiaController;
use App\Http\Controllers\Page\CampController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::prefix('login')->middleware('throttle:test')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('login');
    Route::post('login_process', [UserController::class, 'login'])->name('login_process');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/', [MainPageController::class, 'index'])->name('home');

Route::get('/school-belarus', [SchoolBelarusController::class, 'index'])->name('belarus');
Route::get('/school-belarus/junior', [SchoolBelarus1_4Controller::class, 'index'])->name('junior');
Route::get('/school-belarus/senior', [SchoolBelarus5_11Controller::class, 'index'])->name('senior');

Route::get('/school-russia', [SchoolRussiaController::class, 'index'])->name('russia');
Route::get('/school-online', [OnlineSchoolController::class, 'index'])->name('online');

Route::get('/camp', [CampController::class, 'index'])->name('camp');
Route::get('/camp/jukov-lug', [JukovLugController::class, 'index'])->name('jukov-lug');
Route::get('/camp/georgia', [GeorgiaCampController::class, 'index'])->name('georgia');
Route::get('/camp/dreamland', [DreamlandCampController::class, 'index'])->name('dreamland');

Route::get('/download/{id}', [DocumentController::class, 'download'])->name('download');
Route::view('/single-window', 'single-window');
Route::view('/single-window/admin', 'single-window-admin');
Route::view('/single-window/timetable', 'single-window-timetable');
Route::view('/single-window/organizations', 'single-window-organizations');
Route::view('/single-window/documents', 'single-window-documents');
Route::view('/single-window/links', 'single-window-links');

Route::get('/dev', function (){
    return view('errors.dev');
});

Route::fallback(function (){
    return view('errors.404');
});

Route::get('/thanks', function (){
    return view('errors.thanks');
});


//Route::domain('test.urist-perevozki.by')->group(function(){
//    Route::get('/', function () {
//        return view('urist-perevozki');
//    });
//    Route::get('/blog', function () {
//        return view('blog');
//    });
//    Route::get('/blog/{article}', [ArticleController::class, 'index']);
//});
//test.ilavista.smart-s
