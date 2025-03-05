<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ModelJurusan;
use App\Models\ModelJurusanKategori;
use App\Models\ModelKategoriLayanan;
use App\Models\ModelLayanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PengaturanLayananAdminController extends Controller
{
    public function pengaturan_layanan()
    {

        $layanans = ModelLayanan::get();

        return view('admin.pengaturan_layanan.pengaturan_layanan', compact('layanans'));
    }

    public function edit($id)
    {
        $layanan = ModelLayanan::with(['kategoriLayanan.jurusanKategori'])->findOrFail($id);
        $jurusanList = ModelJurusan::all();

        return view('admin.pengaturan_layanan.edit', compact('layanan', 'jurusanList'));
    }


    public function simpan(Request $request, $id)
    {

        $layanan = ModelLayanan::findOrFail($id);

        $layanan->update([
            'nama_layanan' => $request->nama_layanan,
            'penjelasan' => $request->penjelasan,
            'total_client' => $request->total_client
        ]);

        return redirect('admin/pengaturan/layanan');
    }

    public function tambah_kategori(Request $request)
    {
        $layanan = ModelLayanan::findOrFail($request->layanan_id);

        $kategori = $layanan->kategoriLayanan()->create([
            'id_layanan' => $request->layanan_id,
            'nama_kategori' => $request->nama_kategori,
            'penjelasan' => $request->penjelasan_kategori
        ]);

        foreach ($request->jurusan as $jurusan) {
            ModelJurusanKategori::create([
                'id_kategori' => $kategori->id,
                'id_jurusan' => $jurusan
            ]);
        }

        return redirect('admin/pengaturan/layanan/edit/' . $layanan->id);
    }


    public function hapus_kategori($id)
    {
        ModelKategoriLayanan::findOrFail($id)->delete();
        return redirect()->back();
    }
}
