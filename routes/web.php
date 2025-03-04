<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\PengaturanAdminController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\free_user\BerandaController;
use App\Http\Controllers\free_user\BeritaController;
use App\Http\Controllers\free_user\KritikSaranController;
use App\Http\Controllers\free_user\TentangPerusahaanController;
use App\Http\Controllers\free_user\LayananController;

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login/proses', [AuthController::class, 'proses']);

Route::prefix('')->group(function () {
    Route::get('/', [BerandaController::class, 'beranda']);
    Route::get('/beranda', [BerandaController::class, 'beranda']);

    Route::get('/tentang-perusahaan', [TentangPerusahaanController::class, 'tentang_perusahaan']);

    Route::get('/layanan', [LayananController::class, 'layanan']);

    Route::get('/berita', [BeritaController::class, 'berita']);

    Route::get('/kritik-saran', [KritikSaranController::class, 'kritik_saran']);
});


Route::prefix('admin')->group(function () {
    Route::get('/pengaturan', [PengaturanAdminController::class, 'pengaturan']);
});
