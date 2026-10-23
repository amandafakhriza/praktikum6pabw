<?php
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\Auth\RegisterController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\LaporanController;
    use Illuminate\Support\Facades\Route;
Route::redirect('/', '/laporan/buat');
Route::get('/laporan/buat', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan/{laporan}/konfirmasi', [LaporanController::class, 'konfirmasi'])->name('laporan.konfirmasi');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
Route::middleware('auth')->group(function () {
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/profil', [HomeController::class, 'profile'])->name('profile');
});