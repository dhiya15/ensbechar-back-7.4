<?php

use App\Http\Controllers\ConferenceContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\QReistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LivreController;

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


Route::get('/cms',[Controller::class,'api']);
Route::get('/school',[Controller::class,'info']);
Route::get('/school_description',[Controller::class,'school_description']);
Route::get('/get_content',[Controller::class,'get_content_by_id']);
Route::post('/tmac_contact',[ConferenceContactController::class,'tmac_contact']);
Route::post('/contact',[ContactController::class,'contact']);

Route::post('/quran-registration',[QReistrationController::class,'registration']);

// Mobile CMS
Route::get('/mobile_api',[Controller::class,'mobile_api']);

// E-Library Routes
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('search', [LivreController::class, 'trouverLivre']);
    Route::post('logout', [AuthController::class, 'logout']);
});
