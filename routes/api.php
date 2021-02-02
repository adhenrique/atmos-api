<?php

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('users', 'App\Http\Controllers\UserController@index');
    Route::get('users/{id}', 'App\Http\Controllers\UserController@show');
    Route::post('users', 'App\Http\Controllers\UserController@store');
    Route::put('users/{id}', 'App\Http\Controllers\UserController@update');
    Route::delete('users/{id}', 'App\Http\Controllers\UserController@destroy');

    Route::get('glossaries', 'App\Http\Controllers\GlossaryController@index');
    Route::get('glossaries/{id}', 'App\Http\Controllers\GlossaryController@show');
    Route::post('glossaries', 'App\Http\Controllers\GlossaryController@store');
    Route::put('glossaries/{id}', 'App\Http\Controllers\GlossaryController@update');
    Route::delete('glossaries/{id}', 'App\Http\Controllers\GlossaryController@destroy');

    Route::get('stability-classifications', 'App\Http\Controllers\StabilityClassificationController@index');
    Route::get('stability-classifications/{id}', 'App\Http\Controllers\StabilityClassificationController@show');
    Route::post('stability-classifications', 'App\Http\Controllers\StabilityClassificationController@store');
    Route::put('stability-classifications/{id}', 'App\Http\Controllers\StabilityClassificationController@update');
    Route::delete('stability-classifications/{id}', 'App\Http\Controllers\StabilityClassificationController@destroy');
});
