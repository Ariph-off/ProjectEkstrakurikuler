<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('frontend/index');
});

Route::get('/admin', function () {
    return view('backend/home');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
// route::POST('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
// Route::get("/backend-home", [LoginController::class, 'backendHome']);
// // Route::post("doLogin", [LoginController::class, 'login_proses']);
Route::post('doLogin', function () {
    return view('backend.home');
});
Route::get('/logout',[LoginController::class,'logout'])->name('logout');