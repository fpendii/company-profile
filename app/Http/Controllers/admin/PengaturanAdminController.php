<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengaturanAdminController extends Controller
{
    public function pengaturan(){
        return view('admin.pengaturan.pengaturan');
    }
}
