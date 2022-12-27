<?php

use App\Http\Controllers\AdminControlCenterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Play\ProblemsController;
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


//Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'guest:web'], function () {
    Route::get('register', [CustomLoginController::class, 'showRegisterForm'])->name('register');
    Route::post('register/patient', [CustomLoginController::class, 'registerPatient'])->name('register.submit');

    Route::get('login/patient', [CustomLoginController::class, 'showLoginForm'])->name('login');
    Route::post('login/patient', [CustomLoginController::class, 'login'])->name('loginIn');

    Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');


    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('become/a-doctor', [DoctorController::class, 'showForm'])->name('become.a.doctor');

});

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('home', function () {
        return view('patient.patient-home');
    })->name('home');

    Route::post('logout/patient', [PatientController::class, 'logout'])->name('logout');

    Route::get('patient-profile', [PatientController::class, 'patientProfileForm'])->name('patient.profile');


});


Route::get('hash', function () {
    return bcrypt('12345678');
});
Route::get('check', [ProblemsController::class, 'checkUser']);



// composer require yajra/laravel-datatables-buttons


// public\vendor\datatables\buttons.server-side.js

// Nonem said how aer you manager ?
// i'm fine AbdEl-Monem 'manager said'

// right now I think time is passing slowly when mo sabry came wo what s

// JQuery Ajax Form Submit with FormData Example
// http://www.nicesnippets.com/blog/jquery-ajax-form-submit-with-formdata-example#at_pco=smlwn-1.0&at_si=63aadf0110af7bab&at_ab=per-2&at_pos=0&at_tot=1
