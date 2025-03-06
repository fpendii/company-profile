<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ModelJurusan;
use Illuminate\Http\Request;

class DataMasterController extends Controller
{
    public function jurusan(){

        $jurusan = ModelJurusan::all();
        return view('admin.data_master.jurusan.jurusan', compact('jurusan'));
    }

    public function tambahJurusan(Request $request){
        $jurusan = new ModelJurusan();
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->save();
        return redirect()->back()->with('success', 'Jurusan berhasil ditambahkan!');
    }

    public function hapusJurusan($id){
        $jurusan = ModelJurusan::findOrFail($id);
        $jurusan->kategoriLayanan()->detach(); // Menghapus relasi jika ada
        $jurusan->delete();
        return redirect()->back()->with('success', 'Jurusan berhasil dihapus!');
    }

    public function updateJurusan(Request $request, $id){
        $request->validate([
            'nama_jurusan' => 'required|string|max:255',
        ]);

        $jurusan = ModelJurusan::findOrFail($id);
        $jurusan->nama_jurusan = $request->input('nama_jurusan');
        $jurusan->save();

        return redirect()->back()->with('success', 'Jurusan berhasil diperbarui!');
    }
}
