<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function layanan()
    {
        return view('free_user.layanan.layanan');
    }
}
