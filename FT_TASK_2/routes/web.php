<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmitPatient;
use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\DeleteController;
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
    return view('home');
});

Route::get('/admit',[AdmitPatient::class,'formValidation']);
Route::post('/admit',[AdmitPatient::class,'formValidationPost']);
Route::get('/delete',[DeleteController::class,'Delete']);
Route::post('/delete',[DeleteController::class,'formDelete']);
Route::get('/login',[loginController::class,'formLogIn']);
Route::get('/profile',[loginController::class,'formLogInPost'])->middleware('checklogin');
Route::post('/profile',[loginController::class,'formLogInPost'])->middleware('checklogin');
Route::get('/doctor', function () {
    return view('doctors');
});
Route::post('/logout',[profileController::class,'logout'])->middleware('checklogin');
Route::get('/ambulance',[AmbulanceController::class,'AmbulancePage']);
Route::post('/ambulance',[AmbulanceController::class,'AmbulancePage']);
//Route::get('/searchResult',[AmbulanceController::class,'formSearch']);
Route::get('/search',[AmbulanceController::class,'formSearch']);
Route::post('/search',[AmbulanceController::class,'formSearch']);

