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
Route::get('/landing', function () {
    return view('frontend/landing');
});
Route::get('/landing#about', function () {
    return view('frontend/landing');
});
Route::get('/ekstra', function () {
    return view('frontend/ekstra');
});
Route::get('/prestasi', function () {
    return view('frontend/prestasi');
});
Route::get('/pembina', function () {
    return view('frontend/pembina');
});
Route::get('/pelatih', function () {
    return view('frontend/pelatih');
});
Route::get('/index', function () {
    return view('frontend/index');
});
Route::get('/pramuka', function () {
    return view('ekstra/pramuka');
});
Route::get('/voli', function () {
    return view('ekstra/voli');
});
Route::get('/pmr', function () {
    return view('ekstra/pmr');
});
Route::get('/basket', function () {
    return view('ekstra/basket');
});
Route::get('/sepakbola', function () {
    return view('ekstra/sepakbola');
});
Route::get('/drumband', function () {
    return view('ekstra/drumband');
});
Route::get('/futsal', function () {
    return view('ekstra/futsal');
});
Route::get('/hadrah', function () {
    return view('ekstra/hadrah');
});
Route::get('/paduansuara', function () {
    return view('ekstra/paduansuara');
});
Route::get('/panahan', function () {
    return view('ekstra/panahan');
});
Route::get('/silat', function () {
    return view('ekstra/silat');
});
Route::get('/tari', function () {
    return view('ekstra/tari');
});
Route::get('/bulutangkis', function () {
    return view('ekstra/bulutangkis');
});
Route::get('/band', function () {
    return view('ekstra/band');
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