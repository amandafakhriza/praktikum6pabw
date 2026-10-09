<?php
use App\Http\Controllers\LaporanController;

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/laporan/buat', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan/{laporan}/konfirmasi', [LaporanController::class, 'konfirmasi'])
->name('laporan.konfirmasi');