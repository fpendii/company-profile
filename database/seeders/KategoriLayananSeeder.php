<?php

namespace Database\Seeders;

use App\Models\ModelKategoriLayanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelKategoriLayanan::create([
            'id_layanan' => 1, // pastikan id_layanan ini sesuai dengan data di LayananSeeder
            'nama_kategori' => 'Logo Design',
            'penjelasan' => 'Pembuatan logo profesional.',
        ]);

        ModelKategoriLayanan::create([
            'id_layanan' => 2,
            'nama_kategori' => 'Fullstack Development',
            'penjelasan' => 'Pengembangan aplikasi web lengkap.',
        ]);
    }
}
