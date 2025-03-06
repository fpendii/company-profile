<?php

namespace App\Http\Controllers\free_user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelSetting;

class KritikSaranController extends Controller
{
    public function kritik_saran()
    {
        $dataUsaha = ModelSetting::first();
        return view('free_user.kritik_saran.kritik_saran', compact('dataUsaha'));
    }
}
