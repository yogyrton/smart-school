<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CounselorController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MainNewsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\TeacherController;
use Illuminate\Support\Facades\Route;


Route::middleware('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('main');



    Route::resource('main_news', MainNewsController::class);
    Route::resource('teacher', TeacherController::class);
    Route::resource('news', NewsController::class);
    Route::resource('counselor', CounselorController::class);
    Route::resource('prices', PriceController::class);
    Route::resource('documents', DocumentController::class);
    Route::resource('photos', PhotoController::class);
    Route::resource('galleries', GalleryController::class);
});
