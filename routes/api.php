<?php

use App\Http\Controllers\Api\JwtController;
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

Route::post('login',[JwtController::class,'login']);
Route::post('register',[JwtController::class,'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout',[JwtController::class,'logout']);
    Route::get('get/psa/{id}',[JwtController::class,'getPsa']);
    Route::post('set/psa',[JwtController::class,'addPsaResult']);
});
