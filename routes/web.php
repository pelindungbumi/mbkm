<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TambahKegiatanController;

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

//Route::get('/home', [HomeController::class,'index']);
 Route::get('/home', [HomeController::class,'index'])->middleware('auth');
 Route::get('/tambahkegiatan', [TambahKegiatanController::class,'index'])->middleware('auth');
 Route::get('/bukti', [TambahKegiatanController::class,'BuktiMBKMindex'])->middleware('auth');


//Route ::get('/', [LoginController::class,'index'])->name('login');
Route ::get('/', [LoginController::class,'index'])->name('login')->middleware('guest');
Route ::post('/login', [LoginController::class,'authenticate']);
Route ::post('/logout', [LoginController::class,'logout']);

Route ::get('/login/daftar', [LoginController::class,'daftar'])->middleware('guest');
// Route ::get('/daftar', [LoginController::class,'daftar']);
Route ::get('/login/tentang', [LoginController::class,'tentang']);
Route ::post('/daftar', [LoginController::class,'store']);