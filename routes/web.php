<?php

use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\KomentarController;
use App\Models\Komentar;
use App\Models\Konfirmasi;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::resource('komentar', KomentarController::class)->except('store');
    Route::resource('konfirmasi', KonfirmasiController::class)->except('store');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/test', function () {
    return view('admin.test');
});
