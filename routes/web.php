<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CounselorController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\MainNewsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [MainController::class, 'index'])->name('home');

Route::prefix('login')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('login');
    Route::post('login_process', [UserController::class, 'login'])->name('login_process');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('main');

    Route::get('/download/{id}', [DocumentController::class, 'download'])->name('download');

    Route::resource('main_news', MainNewsController::class);
    Route::resource('teacher', TeacherController::class);
    Route::resource('news', NewsController::class);
    Route::resource('counselor', CounselorController::class);
    Route::resource('prices', PriceController::class);
    Route::resource('documents', DocumentController::class);
    Route::resource('photos', PhotoController::class);
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
