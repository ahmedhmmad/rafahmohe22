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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/welcome',[\App\Http\Controllers\Admin\HomePageController::class,'welcome']);
Route::get('/departments',[\App\Http\Controllers\Admin\DepartmentsController::class,'selectAll']);
Route::post('/contactus',[\App\Http\Controllers\Admin\ContactUsController::class,'sendMessage']);
//Ads
Route::get('/viewAds',[\App\Http\Controllers\Admin\AdsController::class,'viewAds']);
Route::post('/ads',[\App\Http\Controllers\Admin\AdsController::class,'addAds']);

//Social

Route::get('/viewSocial',[\App\Http\Controllers\Admin\SocialEventsController::class,'viewSocial']);
Route::post('/addSocial',[\App\Http\Controllers\Admin\SocialEventsController::class,'addSocial']);


