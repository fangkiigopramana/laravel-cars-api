<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CarTypeController;
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

//api cars
Route::get('/cars',[CarController::class,'index']);
Route::get('/cars/{id}',[CarController::class,'show']);
Route::post('/cars',[CarController::class,'store']);

//api car types
Route::get('/types',[CarTypeController::class,'index']);
Route::get('/types/{id}',[CarTypeController::class,'show']);
