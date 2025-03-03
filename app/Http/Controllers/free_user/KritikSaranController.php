<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{
    public function kritik_saran()
    {
        return view('free_user.kritik_saran.kritik_saran');
    }
}
