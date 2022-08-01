<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Page\MainPageController;
use App\Http\Controllers\Page\SchoolBelarusController;
use App\Http\Controllers\Page\SchoolBelarus1_4Controller;
use App\Http\Controllers\Page\SchoolBelarus5_11Controller;
use App\Http\Controllers\Page\OnlineSchoolController;
use App\Http\Controllers\Page\SchoolRussiaController;
use Illuminate\Support\Facades\Route;


Route::prefix('login')->middleware('throttle:test')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('login');
    Route::post('login_process', [UserController::class, 'login'])->name('login_process');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/', [MainPageController::class, 'index'])->name('home');

Route::get('/school-belarus', [SchoolBelarusController::class, 'index'])->name('index');
Route::get('/school-belarus/junior', [SchoolBelarus1_4Controller::class, 'index'])->name('index');
Route::get('/school-belarus/senior', [SchoolBelarus5_11Controller::class, 'index'])->name('index');

Route::get('/school-russia', [SchoolRussiaController::class, 'index'])->name('index');

Route::get('/school-online', [OnlineSchoolController::class, 'index'])->name('index');


Route::fallback(function (){
    return view('errors.404');
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
