<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\WakaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesanController;


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
Route::resource('/home', LandingController::class);
Route::get('/saran', [LandingController::class, 'saran'])->name('saran');
Route::get('/tiket', [LandingController::class, 'tiket'])->name('tiket');
Route::get('/ceksaran', function(){
    return view('user.ceksaran');
});

// Route::get('/about', function(){
//     return view('user.about');
// });

// Route::get('/home', [LandingController::class, 'main']);
// Route::get('/saran', [LandingController::class, 'user']);

Route::view('/login', 'auth.parent');
Route::get('/login', [LoginController::class, 'main'])->name('masuk')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('masuk.login')->middleware('guest');

Route::resource('admin/waka', WakaController::class);
Route::get('admin/waka/{waka_id}/hapus',[WakaController::class,'hapus'])->name('waka.hapus');
Route::resource('admin/kategori', KategoriController::class);
Route::resource('admin/pesan', PesanController::class);

Route::get('/admin', [DashboardController::class, 'main']);
Route::get('/admin/admin', [DashboardController::class, 'admin']);