<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\UserController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::view('/superadmin/user', 'superadmin.user.index')->name('superadmin.user');

Route::view('/superadmin/kategori', 'superadmin.kategori.index')->name('superadmin.kategori');
Route::view('/superadmin/barang', 'superadmin.barang.index')->name('superadmin.barang');

Route::view('/admin/barang', 'admin.barang.index')->name('admin.barang');
