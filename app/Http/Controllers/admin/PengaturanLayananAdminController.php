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

        return redirect('admin/pengaturan/layanan/edit/' . $layanan->id)->with('success', 'Kategori layanan berhasil Ditambahkan!');
    }


    public function hapus_kategori($id)
    {
        ModelKategoriLayanan::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Kategori layanan berhasil dihapus!');
    }


    public function updateKategori(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'penjelasan_kategori' => 'required|string',
            'jurusan' => 'required|array',
            'jurusan.*' => 'exists:jurusan,id',
        ]);

        // Update kategori_layanan
        $kategori = ModelKategoriLayanan::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->penjelasan = $request->penjelasan_kategori;
        $kategori->save();

        // Sinkronisasi jurusan_kategori
        // Hapus dulu data jurusan_kategori untuk kategori ini
        ModelJurusanKategori::where('id_kategori', $kategori->id)->delete();

        // Lalu insert jurusan baru yang dipilih
        foreach ($request->jurusan as $id_jurusan) {
            ModelJurusanKategori::create([
                'id_jurusan' => $id_jurusan,
                'id_kategori' => $kategori->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Kategori layanan berhasil diperbarui!');
    }

}
