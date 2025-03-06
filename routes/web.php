<?php

use App\Http\Controllers\admin\AkunAdminController;
use App\Http\Controllers\admin\DataMasterController;
use App\Http\Controllers\admin\DataUsahaAdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\PengaturanAdminController;
use App\Http\Controllers\admin\PengaturanLayananAdminController;
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

    Route::get('/layanan', [LayananController::class, 'layananBimbinganMahasiwa']);
    Route::get('/layanan/bimbingan-umum', [LayananController::class, 'layananBimbinganUmum']);
    Route::get('/layanan/artikel-ilmiah', [LayananController::class, 'layananArtikelIlmiah']);
    Route::get('/layanan/olah-data', [LayananController::class, 'layananOlahData']);
    Route::get('/layanan/percetakan', [LayananController::class, 'layananPercetakan']);

    Route::get('/berita', [BeritaController::class, 'berita']);

    Route::get('/kritik-saran', [KritikSaranController::class, 'kritik_saran']);
});


Route::prefix('admin')->group(function () {
    Route::get('/pengaturan', [PengaturanAdminController::class, 'pengaturan']);
    Route::post('/pengaturan/simpan', [PengaturanAdminController::class, 'simpan']);

    Route::get('/pengaturan/layanan', [PengaturanLayananAdminController::class, 'pengaturan_layanan']);
    Route::get('/pengaturan/layanan/edit/{id}', [PengaturanLayananAdminController::class, 'edit']);
    Route::post('/pengaturan/layanan/simpan/{id}', [PengaturanLayananAdminController::class, 'simpan']);

    Route::post('/pengaturan/layanan/tambah-kategori', [PengaturanLayananAdminController::class, 'tambah_kategori']);
    Route::delete('/pengaturan/layanan/hapus-kategori/{id}', [PengaturanLayananAdminController::class, 'hapus_kategori']);

    Route::put('/pengaturan/layanan/edit-kategori/{id}', [PengaturanLayananAdminController::class, 'updateKategori']);

    Route::get('/data-master', [DataMasterController::class, 'jurusan']);
    Route::post('/data-master/jurusan/tambah', [DataMasterController::class, 'tambahJurusan']);
    Route::delete('/data-master/jurusan/hapus/{id}', [DataMasterController::class, 'hapusJurusan']);
    Route::put('/data-master/jurusan/update/{id}', [DataMasterController::class, 'updateJurusan']);

    Route::get('/akun', [AkunAdminController::class, 'akun']);
});
