<?php

use Illuminate\Support\Facades\Route;

// Redirect / ke /login atau /dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Dashboard SB Admin 2 (Dilindungi Authentikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Panggil Route Authentikasi Breeze (login, register, logout, reset password)
require __DIR__.'/auth.php';