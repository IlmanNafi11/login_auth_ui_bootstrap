<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'index'])->name('logout');

Route::get('/check-age', fn() =>  'Ini halaman check age')->middleware('checkAge');

// jika ingin menggunakan group middleware di routing

Route::middleware('namaGroup')->group(function () {
    // Tambahkan routing yang ingin dilewatkan pada middleware yang terdaftar di group middleware namaGroup
});

// menggunakan parameter middleware
// parameter editor akan dikirim ke middleware checkRole
Route::get('post/{id}', fn($id) => "hello bro")->middleware('checkRole:editor');
