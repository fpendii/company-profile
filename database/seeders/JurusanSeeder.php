<?php

namespace Database\Seeders;

use App\Models\ModelJurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelJurusan::create([
            'id_kategori_layanan' => 1, // pastikan id_kategori_layanan ini sesuai dengan data di KategoriLayananSeeder
            'nama_jurusan' => 'Desain Komunikasi Visual',
        ]);

        ModelJurusan::create([
            'id_kategori_layanan' => 2,
            'nama_jurusan' => 'Teknik Informatika',
        ]);
    }
}
