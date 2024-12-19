<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\CatatanPerjalananController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

Route::get('/',[AuthController::class,'showLoginForm']);
Route::get('home',[HomeController::class,'index']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('cek-login', [AuthController::class, 'login']);
Route::resource('penduduk', PendudukController::class);
Route::resource('perjalanan', CatatanPerjalananController::class);
Route::get('/dashboard/buat', [PendudukController::class, 'create'])->name('dashboard.buat');
Route::get('/dashboard/{id}/edit', [PendudukController::class, 'edit'])->name('dashboard.edits');
Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');
Route::put('/penduduk/{id}', [PendudukController::class, 'update'])->name('penduduk.update');






