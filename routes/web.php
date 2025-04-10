<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/registrasi', [AuthController::class, 'tampilregistrasi'])->name('registrasi.tampil');
route::post('/registrasi/submit', [AuthController::class, 'submitregistrasi'])->name('registrasi.submit');


route::get('/login', [AuthController::class, 'tampillogin'])->name('login.tampil');
route::post('/login/submit', [AuthController::class, 'submitlogin'])->name('login.submit');

route::post('/logout', [AuthController::class, 'logout'])->name('logout');


route::get('/siswa', [SiswaController::class, 'tampil']) -> name('siswa.tampil');
route::get('/siswa/tambah', [SiswaController::class, 'tambah']) -> name('siswa.tambah');
route::post('/siswa/submit', [SiswaController::class, 'submit'])->name('siswa.submit');
route::get('/siswa/edit{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
route::post('/siswa/update{id}', [SiswaController::class, 'update'])->name('siswa.update');
route::post('/siswa/delete{id}', [SiswaController::class, 'delete'])->name('siswa.delete');

