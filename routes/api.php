<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;
use App\Http\Controllers\RegisterController;
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

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;

Route::resource('blogs', BlogController::class);
Route::resource('register',RegisterController::class);
Route::get('data',[Apicontroller::class,'getdata']);
Route::get('welcome',[Controller::class,'welcome']);

