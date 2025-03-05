<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ModelJurusan;
use App\Models\ModelKategoriLayanan;
use App\Models\ModelLayanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PengaturanLayananAdminController extends Controller
{
    public function pengaturan_layanan(){

        $layanans = ModelLayanan::get();

        return view('admin.pengaturan_layanan.pengaturan_layanan', compact('layanans'));
    }

    public function edit($id)
    {
        $layanan = ModelLayanan::with('kategoriLayanan.jurusan')->findOrFail($id);

        return view('admin.pengaturan_layanan.edit', compact('layanan'));
    }

    public function simpan(Request $request, $id){

        $layanan = ModelLayanan::findOrFail($id);

        $layanan->update([
            'nama_layanan' => $request->nama_layanan,
            'penjelasan' => $request->penjelasan,
            'total_client' => $request->total_client
        ]);

        return redirect('admin/pengaturan/layanan');
    }

    public function tambah_kategori(Request $request){
        $layanan = ModelLayanan::findOrFail($request->layanan_id);

        $layanan->kategoriLayanan()->create([
            'id_layanan' => $request->layanan_id,
            'nama_kategori' => $request->nama_kategori,
            'penjelasan' => $request->penjelasan_kategori
        ]);

        return redirect('admin/pengaturan/layanan/edit/'.$layanan->id);
    }
}
