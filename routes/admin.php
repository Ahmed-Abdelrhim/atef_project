<?php

use App\Http\Controllers\AdminControlCenterController;
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
    Route::post('admin/login',[AdminController::class,'login'])->name('admin.login');

});

Route::group(['middleware' => 'auth:admin'],function() {

    Route::post('admin-logout',[AdminController::class,'logout'])->name('admin.logout');
    Route::group(['prefix' => 'admin'] , function() {
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
        Route::get('profile',[AdminController::class,'profile'])->name('profile');
        Route::get('admin-add-patient',[AdminController::class,'addPatient'])->name('admin.add.patient');



        Route::get('all-patients-to-view',[AdminControlCenterController::class,'allPatients'])->name('all.patients');
        Route::get('all-patients-to-view-admins',[AdminControlCenterController::class,'viewAllPatients'])->name('admin.view.all.patients');


        Route::get('admin-update-patient',[AdminControlCenterController::class,'updatePatient'])->name('admin.update.patient');
        Route::get('admin-delete-patient',[AdminControlCenterController::class,'deletePatient'])->name('admin.delete.patient');

    });

});

Route::get('hash',function (){
    return bcrypt('12345678');
});
