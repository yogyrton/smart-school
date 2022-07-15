<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Page\MainPageController;
use Illuminate\Support\Facades\Route;


Route::prefix('login')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('login');
    Route::post('login_process', [UserController::class, 'login'])->name('login_process');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/', [MainPageController::class, 'index'])->name('home');
Route::get('/mail', [MailController::class, 'index'])->name('mail');



Route::fallback(function (){
    return 'aasda';
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
