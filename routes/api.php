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
    Route::get('auth/me', 'App\Http\Controllers\UserController@me');
    Route::put('auth/me', 'App\Http\Controllers\UserController@updateMe');

    Route::get('users', 'App\Http\Controllers\UserController@index');
    Route::get('users/{id}', 'App\Http\Controllers\UserController@show');
    Route::post('users', 'App\Http\Controllers\UserController@store');
    Route::put('users/{id}', 'App\Http\Controllers\UserController@update');
    Route::delete('users/{id}', 'App\Http\Controllers\UserController@destroy');

    Route::get('roles', 'App\Http\Controllers\RoleController@index');
    Route::get('roles/{id}', 'App\Http\Controllers\RoleController@show');
    Route::post('roles', 'App\Http\Controllers\RoleController@store');
    Route::put('roles/{id}', 'App\Http\Controllers\RoleController@update');
    Route::delete('roles/{id}', 'App\Http\Controllers\RoleController@destroy');

    Route::get('glossaries', 'App\Http\Controllers\GlossaryController@index');
    Route::get('glossaries/{id}', 'App\Http\Controllers\GlossaryController@show');
    Route::post('glossaries', 'App\Http\Controllers\GlossaryController@store');
    Route::put('glossaries/{id}', 'App\Http\Controllers\GlossaryController@update');
    Route::delete('glossaries/{id}', 'App\Http\Controllers\GlossaryController@destroy');

    Route::get('stability-classifications', 'App\Http\Controllers\StabilityClassificationController@index');
    Route::get('stability-classifications/grouped', 'App\Http\Controllers\StabilityClassificationController@listGroupedByTimeAndCondition');
    Route::get('stability-classifications/conditions-by-time/{timeId}', 'App\Http\Controllers\StabilityClassificationController@listConditionsByTime');
    Route::get('stability-classifications/{id}', 'App\Http\Controllers\StabilityClassificationController@show');
    Route::post('stability-classifications', 'App\Http\Controllers\StabilityClassificationController@store');
    Route::put('stability-classifications/{id}', 'App\Http\Controllers\StabilityClassificationController@update');
    Route::delete('stability-classifications/{id}', 'App\Http\Controllers\StabilityClassificationController@destroy');

    Route::get('curve-fit-constants', 'App\Http\Controllers\CurveFitConstantController@index');
    Route::get('curve-fit-constants/grouped', 'App\Http\Controllers\CurveFitConstantController@listGrouped');
    Route::get('curve-fit-constants/stability-classes', 'App\Http\Controllers\CurveFitConstantController@listStabilityClasses');
    Route::get('curve-fit-constants/{id}', 'App\Http\Controllers\CurveFitConstantController@show');
    Route::post('curve-fit-constants', 'App\Http\Controllers\CurveFitConstantController@store');
    Route::put('curve-fit-constants/{id}', 'App\Http\Controllers\CurveFitConstantController@update');
    Route::delete('curve-fit-constants/{id}', 'App\Http\Controllers\CurveFitConstantController@destroy');

    Route::get('wind-profile-exponents', 'App\Http\Controllers\WindProfileExponentController@index');
    Route::get('wind-profile-exponents/grouped', 'App\Http\Controllers\WindProfileExponentController@listGrouped');
    Route::get('wind-profile-exponents/{id}', 'App\Http\Controllers\WindProfileExponentController@show');
    Route::post('wind-profile-exponents', 'App\Http\Controllers\WindProfileExponentController@store');
    Route::put('wind-profile-exponents/{id}', 'App\Http\Controllers\WindProfileExponentController@update');
    Route::delete('wind-profile-exponents/{id}', 'App\Http\Controllers\WindProfileExponentController@destroy');

    Route::get('distance-operators', 'App\Http\Controllers\DistanceOperatorController@index');
    Route::get('distance-operators/{id}', 'App\Http\Controllers\DistanceOperatorController@show');
    Route::post('distance-operators', 'App\Http\Controllers\DistanceOperatorController@store');
    Route::put('distance-operators/{id}', 'App\Http\Controllers\DistanceOperatorController@update');
    Route::delete('distance-operators/{id}', 'App\Http\Controllers\DistanceOperatorController@destroy');

    Route::get('surfaces', 'App\Http\Controllers\SurfacesController@index');
    Route::get('surfaces/{id}', 'App\Http\Controllers\SurfacesController@show');
    Route::post('surfaces', 'App\Http\Controllers\SurfacesController@store');
    Route::put('surfaces/{id}', 'App\Http\Controllers\SurfacesController@update');
    Route::delete('surfaces/{id}', 'App\Http\Controllers\SurfacesController@destroy');

    Route::get('times', 'App\Http\Controllers\TimeController@index');
    Route::get('times/{id}', 'App\Http\Controllers\TimeController@show');
    Route::post('times', 'App\Http\Controllers\TimeController@store');
    Route::put('times/{id}', 'App\Http\Controllers\TimeController@update');
    Route::delete('times/{id}', 'App\Http\Controllers\TimeController@destroy');

    Route::get('conditions', 'App\Http\Controllers\ConditionController@index');
    Route::get('conditions/{id}', 'App\Http\Controllers\ConditionController@show');
    Route::post('conditions', 'App\Http\Controllers\ConditionController@store');
    Route::put('conditions/{id}', 'App\Http\Controllers\ConditionController@update');
    Route::delete('conditions/{id}', 'App\Http\Controllers\ConditionController@destroy');

    Route::get('calcs', 'App\Http\Controllers\CalcController@index');
    Route::get('calcs/{id}', 'App\Http\Controllers\CalcController@show');
    Route::post('calcs', 'App\Http\Controllers\CalcController@store');
    Route::put('calcs/{id}', 'App\Http\Controllers\CalcController@update');
    Route::delete('calcs/{id}', 'App\Http\Controllers\CalcController@destroy');
});
