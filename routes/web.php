<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.authlogin');
});

Route::get('/register', function () {
    return view('pages.auth.authregister');
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

Route::get('/tambah-pengaduan', function () {
    return view('pages.karyawan.tambah-pengaduan');
});

Route::get('/followupkaryawan', function () {
    return view('pages.karyawan.followupkaryawan');
});

Route::get('/rincian-pengaduan', function () {
    return view('pages.karyawan.rincian-aduan');
});

Route::get('/admin-dashboard', function () {
    return view('pages.pemeliharaan.dashboard-admin');
});

Route::get('/data-pengaduan', function () {
    return view('pages.pemeliharaan.data-pengaduan');
});

Route::get('/data-user', function () {
    return view('pages.pemeliharaan.data-user');
});

Route::get('/followup', function () {
    return view('pages.pemeliharaan.follow-up');
});



