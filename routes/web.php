<?php

use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PembinaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Sesicontroller;
use App\Models\Pembina;
use App\Models\Siswa;


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


Route::get('/landing', function () {
    return view('frontend/landing');
});
// Route::get('/landing#about', function () {
//     return view('frontend/landing');
// });
Route::get('/userekstra', function () {
    return view('frontend/ekstra');
});
Route::get('/userprestasi', function () {
    return view('frontend/prestasi');
});
Route::get('/userpembina', function () {
    return view('frontend/userpembina');
});
Route::get('/userpelatih', function () {
    return view('frontend/userpelatih');
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



Route::resource('pelatih', PelatihController::class);
Route::resource('ekstra', EkstraController::class);
Route::resource('pembina', PembinaController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('user', UsersController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('kategori', KategoriController::class);






// Route::get('/admin', function () {
//     return view('backend/home');
// });
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// route::POST('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
// Route::get("/backend-home", [LoginController::class, 'backendHome']);
// // Route::post("doLogin", [LoginController::class, 'login_proses']);
// Route::post('doLogin', function () {
//     return view('backend.home');
// });
// Route::get('/logout',[LoginController::class,'logout'])->name('logout');
//multiuser
Route::middleware(['guest'])->group(function(){
    Route::get('/',[Sesicontroller::class, 'index'])->name('login');
    Route::post('/',[Sesicontroller::class, 'login']);
});
Route::get('/home',function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[Admincontroller::class,'index']);
    Route::get('/admin/admin',[Admincontroller::class,'admin'])->middleware('userakses:admin');
    Route::get('/admin/voly',[Admincontroller::class,'voly'])->middleware('userakses:voly');
    Route::get('/admin/Pramuka',[Admincontroller::class,'Pramuka'])->middleware('userakses:Pramuka');
    Route::get('/admin/Drumb_Band',[Admincontroller::class,'Drumb_Band'])->middleware('userakses:Drumb_Band');
    Route::get('/admin/basket',[Admincontroller::class,'basket'])->middleware('userakses:basket');
    Route::get('/admin/Hadra',[Admincontroller::class,'Hadra'])->middleware('userakses:Hadra');
    Route::get('/admin/Pmr',[Admincontroller::class,'Pmr'])->middleware('userakses:Pmr');
    Route::get('/admin/Panahan',[Admincontroller::class,'Panahan'])->middleware('userakses:Panahan');
    Route::get('/admin/Sepak_Bola',[Admincontroller::class,'Sepak_Bola'])->middleware('userakses:Sepak_Bola');
    Route::get('/admin/Tari',[Admincontroller::class,'Tari'])->middleware('userakses:Tari');
    Route::get('/admin/Futsal',[Admincontroller::class,'Futsal'])->middleware('userakses:Futsal');
    Route::get('/admin/Band_Musik',[Admincontroller::class,'Band_Musik'])->middleware('userakses:Band_Musik');
    Route::get('/admin/Remas',[Admincontroller::class,'Remas'])->middleware('userakses:Remas');
    Route::get('/adminSilat',[Admincontroller::class,'Silat'])->middleware('userakses:Silat');
    Route::get('/admin/Bulutangkis',[Admincontroller::class,'Bulutangkis '])->middleware('userakses:Bulutangkis');
    Route::get('/logout', [Sesicontroller::class,'logout']);

});