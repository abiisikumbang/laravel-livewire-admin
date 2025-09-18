<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
    Route::view('superadmin/kategori', 'superadmin.kategori.index')->name('superadmin.kategori');
    Route::view('/superadmin/user', 'superadmin.user.index')->name('superadmin.user');
    Route::view('/superadmin/barang', 'superadmin.barang.index')->name('superadmin.barang');
    Route::view('/admin/barang', 'admin.barang.index')->name('admin.barang');



require __DIR__.'/auth.php';

