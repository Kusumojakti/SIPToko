<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\LoginCheck;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('pages.auth.authlogin');
});

Route::get('/register', function () {
    return view('pages.auth.authregister');
});


// auth
Route::post('register', [UsersController::class, 'store']);
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);


Route::middleware(LoginCheck::class)->group(function () {

    Route::get('/', function () {
        return view('pages.dashboard');
    });

    Route::middleware('roles:karyawan')->group(function () {
        // pengaduan | laporan
        Route::get('/pengaduan', [LaporanController::class, 'index']);
        Route::get('/tambah-pengaduan', [LaporanController::class, 'create']);
    });


    Route::get('/profile', function () {
        return view('pages.karyawan.profile');
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
});
