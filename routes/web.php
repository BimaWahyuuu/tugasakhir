<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\WakaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\PenggunaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// <-----front----->
Route::resource('/home', LandingController::class);
Route::get('/saran', [LandingController::class, 'saran'])->name('saran');
Route::get('/tiket', [LandingController::class, 'tiket'])->name('tiket');
Route::get('/ceksaran', function(){
    return view('user.ceksaran');
});
Route::resource('/saran', SaranController::class);
Route::get('/home', function(){
    return view('user.homepage');
});
Route::get('/ceksaran', function(){
    return view('user.ceksaran');
});
Route::get('/tentangkami', function(){
    return view('user.tentangkami');
});
// <-----endfront----->


// Route::resource('/home', LandingController::class);
// Route::get('/saran', [LandingController::class, 'saran'])->name('saran');
// Route::get('/tiket', [LandingController::class, 'tiket'])->name('tiket');

// <-----auth----->
Route::get('/login', [LoginController::class, 'main'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// <-----endauth----->

// <-----admin----->

Route::get('/dashboard', [DashboardController::class, 'main'])->middleware('auth');

// user/admin
Route::resource('/admin/pengguna', PenggunaController::class);

// waka
Route::post('admin/waka/{waka_id}/hapus',[WakaController::class,'hapus'])->name('waka.hapus');
Route::resource('/admin/waka', WakaController::class);

// bidang
Route::get('admin/bidang/list/{waka_id}', [BidangController::class, 'list'])->name('bidang.list');
Route::resource('/admin/bidang', BidangController::class);

// pesan
Route::get('/admin/pesan/histories',[PesanController::class,'histories'])->name('pesan.histories');
Route::post('/admin/pesan/{pesan_id}', [PesanController::class,'tolak'])->name('pesan.tolak');
Route::resource('/admin/pesan', PesanController::class);

// <-----admin----->