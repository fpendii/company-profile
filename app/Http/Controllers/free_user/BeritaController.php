<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use App\Models\ModelBerita;
use Illuminate\Http\Request;
use App\Models\ModelSetting;

class BeritaController extends Controller
{
    public function berita()
    {
        $dataUsaha = ModelSetting::first();
        $dataBerita = ModelBerita::all();
        $beritaTerbaru = ModelBerita::latest()->take(4)->get();

        return view('free_user.berita.berita', compact('dataUsaha', 'dataBerita', 'beritaTerbaru'));
    }

    public function detail($id)
    {
        $dataUsaha = ModelSetting::first();
        $dataBerita = ModelBerita::find($id);

        return view('free_user.berita.detail', compact('dataUsaha', 'dataBerita'));
    }
}
