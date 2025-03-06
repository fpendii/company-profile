<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelSetting;

class TentangPerusahaanController extends Controller
{
    public function tentang_perusahaan()
    {
        $dataUsaha = ModelSetting::first();
        return view('free_user.tentang_perusahaan.tentang_perusahaan', compact('dataUsaha'));
    }
}
