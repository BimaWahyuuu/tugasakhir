<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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
Route::get('/masuk', [LoginController::class, 'main'])->name('masuk')->middleware('guest');
Route::get('/masuk', [LoginController::class, 'main'])->name('masuk')->middleware('guest');
Route::post('/masuk', [LoginController::class, 'login'])->name('masuk.login')->middleware('guest');

Route::get('/test', function(){
    return view('testIntegrasi');
});