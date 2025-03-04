<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function layananBimbinganMahasiwa()
    {
        return view('free_user.layanan.layanan_mahasiswa');
    }

    public function layananBimbinganUmum(){
        return view('free_user.layanan.layanan_umum');
    }

    public function layananArtikelIlmiah(){
        return view('free_user.layanan.layanan_artikel_ilmiah');
    }

    public function layananOlahData(){
        return view('free_user.layanan.layanan_olah_data');
    }

    public function layananPercetakan(){
        return view('free_user.layanan.layanan_percetakan');
    }
}
