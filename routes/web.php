<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

ROUTE::GET('/', [LoginController::class, 'ceklogin']);
Route::POST('actionlogin', [LoginController::class, 'actionlogin']);
Route::GET('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::GET('data_tamu', [HomeController::class, 'data_tamu'])->name('data_tamu')->middleware('auth');
Route::GET('data_tamu/read', [HomeController::class, 'read'])->name('read')->middleware('auth');
Route::GET('data_tamu/create', [HomeController::class, 'data_tamu_create'])->name('data_tamu_create')->middleware('auth');
Route::POST('data_tamu/store', [HomeController::class, 'data_tamu_store'])->name('data_tamu_store')->middleware('auth');
// Route::GET('data_tamu/store', [HomeController::class, 'data_tamu_store'])->name('data_tamu_store')->middleware('auth');
Route::GET('pengurusan_surat', [HomeController::class, 'pengurusan_surat'])->name('pengurusan_surat')->middleware('auth');
Route::POST('pengurusan_surat/lengkapi_data/{id}', [HomeController::class, 'lengkapi_data'])->name('lengkapi_data')->middleware('auth');
Route::GET('surat_keterangan_usaha/{id}', [HomeController::class, 'surat_keterangan_usaha'])->name('surat_keterangan_usaha')->middleware('auth');
Route::GET('pengarsipan_surat', [HomeController::class, 'pengarsipan_surat'])->name('pengarsipan_surat')->middleware('auth');
Route::GET('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');