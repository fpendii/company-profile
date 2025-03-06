<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ModelBerita;
use Illuminate\Http\Request;

class BeritaAdminController extends Controller
{
    public function berita()
    {
        $beritas = ModelBerita::paginate(10);
        return view('admin.berita.berita', compact('beritas'));
    }

    public function tambah(){
        return view('admin.berita.tambah');
    }

    public function simpan(Request $request){
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'required|string|unique:berita,slug|max:255',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'penulis' => 'required|string|max:255',
            'status' => 'required|in:draft,published,archived',
            'tanggal_publish' => 'required|date',
        ]);

        // Menyimpan gambar jika ada
        if ($request->hasFile('gambar')) {
            // Menyimpan gambar ke storage/public
            $gambarPath = $request->file('gambar')->store('images/berita', 'public');
        } else {
            $gambarPath = null;
        }

        // Membuat berita baru
        $berita = ModelBerita::create([
            'judul' => $validatedData['judul'],
            'slug' => $validatedData['slug'],
            'konten' => $validatedData['konten'],
            'gambar' => $gambarPath, // Menyimpan path gambar
            'penulis' => $validatedData['penulis'],
            'status' => $validatedData['status'],
            'tanggal_publish' => $validatedData['tanggal_publish'],
        ]);

        // Redirect dengan pesan sukses
        return redirect()->to('admin/berita')->with('success', 'Berita berhasil disimpan.');
    }

    public function edit($id)
    {
        $berita = ModelBerita::findOrFail($id); // Mendapatkan data berita berdasarkan ID
        return view('admin.berita.edit', compact('berita')); // Mengirim data berita ke view
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'konten' => 'required',
            'penulis' => 'required|string|max:255',
            'status' => 'required|in:draft,published,archived',
            'tanggal_publish' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Menemukan berita yang akan diupdate
        $berita = ModelBerita::findOrFail($id);

        // Update data berita
        $berita->judul = $request->judul;
        $berita->slug = $request->slug;
        $berita->konten = $request->konten;
        $berita->penulis = $request->penulis;
        $berita->status = $request->status;
        $berita->tanggal_publish = $request->tanggal_publish;

        // Mengecek apakah ada gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Menghapus gambar lama jika ada
            if ($berita->gambar && file_exists(public_path('storage/' . $berita->gambar))) {
                unlink(public_path('storage/' . $berita->gambar));
            }

            // Menyimpan gambar baru
            $gambarPath = $request->file('gambar')->store('images/berita', 'public');
            $berita->gambar = $gambarPath;
        }

        // Menyimpan perubahan ke database
        $berita->save();

        // Redirect dengan pesan sukses
        return redirect()->to('admin/berita')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
{
    $berita = ModelBerita::findOrFail($id);

    // Hapus gambar jika ada
    if ($berita->gambar && file_exists(public_path('storage/' . $berita->gambar))) {
        unlink(public_path('storage/' . $berita->gambar));
    }

    // Hapus data berita
    $berita->delete();

    return redirect()->to('admin/berita')->with('success', 'Berita berhasil dihapus!');
}

}
