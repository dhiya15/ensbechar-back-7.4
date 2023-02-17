<?php

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
Route::get('/cms',[\App\Http\Controllers\Controller::class,'api']);
Route::get('/school',[\App\Http\Controllers\Controller::class,'info']);
Route::get('/school_description',[\App\Http\Controllers\Controller::class,'school_description']);
