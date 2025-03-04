<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function proses(Request $request){
        // $username = $request->input('username');
        // $password = $request->input('password');

        // if($username == 'admin' && $password == 'admin'){
        //     $request->session()->put('username', $username);
        //     return redirect('admin/beranda');
        // }else{
        //     return redirect('login');
        // }
        return redirect('admin/pengaturan');
    }
}
