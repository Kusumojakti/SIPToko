<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/authlogin');
});

Route::get('/register', function () {
    return view('auth/authregister');
});

Route::get('/dashboard', function () {
    return view('pages.karyawan.dashboard');
});

Route::get('/pengaduan', function () {
    return view('pages.karyawan.pengaduan');
});

Route::get('/profile', function () {
    return view('pages.karyawan.profile');
});

Route::get('/data-pengaduan', function () {
    return view('pages.pemeliharaan.data-pengaduan');
});

