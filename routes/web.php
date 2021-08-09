<?php

use App\Http\Controllers\AuthController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [AuthController::class, 'logIn']);
Route::post('/logout', [AuthController::class, 'logOut']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.reset');
Route::post('/register', 'App\Http\Controllers\UserController@register');
Route::post('/contact', [AuthController::class, 'contact'])->middleware('throttle:10,1');

Route::prefix('mail')->group(function () {
    Route::get('test', function () {
        Mail::to(sendTo(['eu@adhenrique.com.br']))->send(new TestMail());
    });
});
