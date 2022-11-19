<?php

use App\Http\Controllers\AdminControlCenterController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\PatientController;
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


Route::group(['middleware' => 'guest:web'], function () {
    Route::get('register/patient', [CustomLoginController::class, 'showRegisterForm'])->name('register.form');
    Route::post('register', [CustomLoginController::class, 'registerPatient'])->name('register');

    Route::get('login/patient', [CustomLoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [CustomLoginController::class, 'login'])->name('loginIn');



});

Route::group(['middleware' => 'auth:web'],function() {
        Route::get('home', function () {
        return view('patient.patient-home');
    })->name('home');

        Route::post('logout/patient',[PatientController::class,'logout'])->name('logout');

        Route::get('patient-profile',[PatientController::class,'patientProfileForm'])->name('patient.profile');


});

