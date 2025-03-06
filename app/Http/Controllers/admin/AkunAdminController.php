<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkunAdminController extends Controller
{
    public function akun(){
        return view('admin.akun.akun');
    }
}
