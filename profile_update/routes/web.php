<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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

Route::get('/register', function (){
    return view('register');
});

Route::get("/register",[RegisterController::class,"GetRegisterPage"])->name("register.get");
Route::post("/register",[RegisterController::class,"RegisterUser"])->name("register.post");

Route::get("/login",[RegisterController::class,"GetLoginUserPage"])->name("login.get");

Route::post("/login",[RegisterController::class,"GetLoginUser"])->name("login.post");

Route::get("/logout",[RegisterController::class,"LogoutUser"])->name("logout");

Route::get("/dashboard",[RegisterController::class,"GetDashboard"])->name("dashboard");

Route::get("/editprofile",[RegisterController::class,"EditProfile"])->name("editprofile");

Route::post("/editprofile",[RegisterController::class,"UpdateProfile"])->name("updateprofile");
