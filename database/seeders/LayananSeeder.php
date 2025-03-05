<?php

namespace Database\Seeders;

use App\Models\ModelLayanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelLayanan::create([
            'nama_layanan' => 'Desain Grafis',
            'penjelasan' => 'Layanan pembuatan desain grafis profesional.',
            'total_client' => 25,
        ]);

        ModelLayanan::create([
            'nama_layanan' => 'Pengembangan Web',
            'penjelasan' => 'Layanan pembuatan website responsive dan modern.',
            'total_client' => 40,
        ]);
    }
}
