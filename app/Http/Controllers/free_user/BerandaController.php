<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('free_user.beranda.beranda');
    }
}
