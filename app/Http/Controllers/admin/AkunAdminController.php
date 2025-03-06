<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AkunAdminController extends Controller
{
    public function akun(){
        $akun = User::first();

        return view('admin.akun.akun', compact('akun'));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);



        $akun = User::first();
        $akun->name = $request->input('name');
        $akun->email = $request->input('email');
        $akun->password = bcrypt($request->input('password'));
        $akun->save();

        return redirect()->back()->with('success', 'Akun berhasil diperbarui!');
    }
}
