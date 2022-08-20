<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\MailWindowController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/mail', [MailController::class, 'send'])->name('mail');
Route::post('/mail-window', [MailWindowController::class, 'send'])->name('mail-window');
