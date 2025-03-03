<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangPerusahaanController extends Controller
{
    public function tentang_perusahaan()
    {
        return view('free_user.tentang_perusahaan.tentang_perusahaan');
    }
}
