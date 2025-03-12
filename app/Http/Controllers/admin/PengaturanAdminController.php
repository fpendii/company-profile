<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelSetting;

class PengaturanAdminController extends Controller
{
    public function pengaturan(){

        $setting = ModelSetting::first();

        return view('admin.pengaturan.pengaturan', compact('setting'));
    }

    public function simpan(Request $request)
{
    // Validasi input jika perlu
    $request->validate([
        'nama_usaha' => 'required|string|max:255',
        'slogan' => 'required|string|max:255',
        'penjelasan_usaha' => 'required|string',
        'visi' => 'required|string',
        'misi' => 'required|string',
        'nomer_telepon' => 'required|string',
        'alamat' => 'required|string',
        'tentang_usaha' => 'required|string',
        'email' => 'required|email',
    ]);

    // Mengambil data yang ada di database
    $setting = ModelSetting::first(); // Mengambil satu data pertama (jika ada)

    // Logika untuk update atau create
    if ($setting) {
        // Jika data sudah ada, maka update
        $setting->update([
            'nama_usaha' => $request->nama_usaha,
            'slogan' => $request->slogan,
            'penjelasan_usaha' => $request->penjelasan_usaha,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'nomer_telepon' => $request->nomer_telepon,
            'alamat' => $request->alamat,
            'tentang_usaha' => $request->tentang_usaha,
            'email' => $request->email
        ]);
    } else {
        // Jika data belum ada, maka create
        ModelSetting::create([
            'nama_usaha' => $request->nama_usaha,
            'slogan' => $request->slogan,
            'penjelasan_usaha' => $request->penjelasan_usaha,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'nomer_telepon' => $request->nomer_telepon,
            'alamat' => $request->alamat,
            'tentang_usaha' => $request->tentang_usaha,
            'email' => $request->email
        ]);
    }

    // Redirect atau beri respons setelah sukses
    return redirect()->to('admin/pengaturan')->with('success', 'Data berhasil disimpan!');
}

}
