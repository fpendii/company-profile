<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelSetting;

class BeritaController extends Controller
{
    public function berita()
    {
        $dataUsaha = ModelSetting::first();
        return view('free_user.berita.berita', compact('dataUsaha'));
    }
}
