<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ModelSetting;
use App\Models\ModelLayanan;

class LayananController extends Controller
{
    public function layananBimbinganMahasiwa()
    {
        $dataUsaha = ModelSetting::first();
        $layananBimbinganMahasiswa = ModelLayanan::with(['kategoriLayanan.jurusanKategori'])->where('nama_layanan', 'Bimbingan Mahasiswa')->first();
        return view('free_user.layanan.layanan_mahasiswa', compact('dataUsaha', 'layananBimbinganMahasiswa'));
    }

    public function layananBimbinganUmum(){
        $dataUsaha = ModelSetting::first();
        $layananBimbinganUmum = ModelLayanan::with(['kategoriLayanan.jurusanKategori'])->where('nama_layanan', 'Bimbingan Umum')->first();
        return view('free_user.layanan.layanan_umum', compact('dataUsaha', 'layananBimbinganUmum'));
    }

    public function layananArtikelIlmiah(){
        $dataUsaha = ModelSetting::first();
        $layananArtikelIlmiah = ModelLayanan::with(['kategoriLayanan.jurusanKategori'])->where('nama_layanan', 'Artikel Ilmiah')->first();
        return view('free_user.layanan.layanan_artikel_ilmiah', compact('dataUsaha', 'layananArtikelIlmiah'));
    }

    public function layananOlahData(){
        $dataUsaha = ModelSetting::first();
        $layananOlahData = ModelLayanan::with(['kategoriLayanan.jurusanKategori'])->where('nama_layanan', 'Olah Data Statistik')->first();
        return view('free_user.layanan.layanan_olah_data', compact('dataUsaha','layananOlahData'));
    }

    public function layananPercetakan(){
        $dataUsaha = ModelSetting::first();
        $layananPercetakan = ModelLayanan::with(['kategoriLayanan.jurusanKategori'])->where('nama_layanan', 'Percetakan')->first();
        return view('free_user.layanan.layanan_percetakan',compact('dataUsaha','layananPercetakan'));
    }
}
