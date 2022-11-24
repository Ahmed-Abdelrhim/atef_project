<?php

use App\Http\Controllers\AdminControlCenterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\WaitingListDoctors\WaitingList;
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
    Route::get('login/patient', [CustomLoginController::class, 'showLoginForm'])->name('login');
    Route::get('register', [CustomLoginController::class, 'showRegisterForm'])->name('register');

});

Route::group(['middleware' => 'auth:admin'],function() {
    Route::post('admin-logout',[AdminController::class,'logout'])->name('admin.logout');
    Route::group(['prefix' => 'admin'] , function() {
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
        Route::get('profile',[AdminController::class,'profile'])->name('profile');
        Route::get('admin-add-patient',[AdminController::class,'addPatient'])->name('admin.add.patient');



        Route::get('all-patients-to-view',[AdminControlCenterController::class,'allPatients'])->name('all.patients');
        Route::get('all-patients-to-view-admins',[AdminControlCenterController::class,'viewAllPatients'])->name('admin.view.all.patients');


        Route::get('admin-update-patient/{id}',[AdminControlCenterController::class,'updatePatientForm'])->name('admin.update.patient');
        Route::post('admin/update/patient/{id}',[AdminControlCenterController::class,'updatePatient'])->name('admin.store.update.patient');

        Route::get('admin-delete-patient/{id}',[AdminControlCenterController::class,'deletePatient'])->name('admin.delete.patient');
        Route::get('waiting-list-of-doctors',[WaitingList::class,'viewWaitingListDoctors'])->name('viewWaitingListDoctors');
        Route::get('waiting/list/of/doctors',[WaitingList::class,'dataTables'])->name('get.waiting.doctors.to.admin');
        Route::get('accept/doctor/{id}',[WaitingList::class,'acceptDoctor'])->name('accept.doctor');
        Route::get('reject/doctor/{id}',[WaitingList::class,'rejectDoctor'])->name('reject.doctor');

    });

});

Route::get('hash',function (){
    return bcrypt('12345678');
});
