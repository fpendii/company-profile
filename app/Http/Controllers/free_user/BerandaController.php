<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use App\Models\ModelLayanan;
use App\Models\ModelSetting;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        $dataUsaha = ModelSetting::first();
        $layananBimbinganMahasiswa = ModelLayanan::where('nama_layanan', 'Bimbingan Mahasiswa')->first();
        $layananBimbinganUmum = ModelLayanan::where('nama_layanan', 'Bimbingan Umum')->first();
        $layanaArtikelIlmiah = ModelLayanan::where('nama_layanan', 'Artikel Ilmiah')->first();
        $layananOlahData = ModelLayanan::where('nama_layanan', 'Olah Data Statistik')->first();
        $layananPercetakan = ModelLayanan::where('nama_layanan', 'Percetakan')->first();
        return view('free_user.beranda.beranda', compact('dataUsaha', 'layananBimbinganMahasiswa', 'layananBimbinganUmum', 'layanaArtikelIlmiah', 'layananOlahData', 'layananPercetakan'));
    }
}
