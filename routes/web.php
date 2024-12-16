<?php

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

// Route ke halaman welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/user/pemesanan', function () {
    return view('user.pemesanan');
});

Route::get('/', function () {
    return view('home');
});

Route::get('admin/login', function () {
    return view('admin.login');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('admin/edit', function () {
    return view('admin.edit');
});

Route::get('admin/tambah', function () {
    return view('admin.tambah');
});

Route::get('admin/edit', function () {
    return view('admin.edit');   
});

Route::get('user/mobil', function () {
    return view('user.mobil');
});

Route::get('admin/laporan', function () {
    return view('admin.laporan');
});

Route::get('user/penjual', function () {
    return view('user.penjual');
});

Route::get('user/konfirmasi', function () {
    return view('user.konfirmasi');
});


