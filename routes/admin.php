<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomLoginController;
use Illuminate\Support\Facades\Route;

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

//Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'guest:admin'], function () {
    Route::get('admin/login',[AdminController::class,'showLoginForm'])->name('admin.login.form');
    Route::post('admin/login',[AdminController::class,'showLoginForm'])->name('admin.login');

});

Route::group(['middleware' => 'auth:admin'],function() {


});

