<?php

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

Route::prefix('admin')->group(function (){
    Route::get('login', [UserController::class, 'index'])->name('admin.login');
    Route::post('login_process', [UserController::class, 'login'])->name('admin.login_process');
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
