<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelKategoriLayanan extends Model
{
    use HasFactory;

    protected $table = 'kategori_layanan';

    protected $fillable = [
        'id_layanan',
        'nama_kategori',
        'penjelasan',
    ];

    public function layanan()
    {
        return $this->belongsTo(ModelLayanan::class, 'id_layanan');
    }

    public function jurusan()
    {
        return $this->belongsToMany(
            ModelJurusan::class,              // Model relasinya
            'jurusan_kategori',          // Nama tabel pivot
            'id_kategori',               // Foreign key di tabel pivot yang nyambung ke KategoriLayanan
            'id_jurusan'                 // Foreign key di tabel pivot yang nyambung ke Jurusan
        );
    }

    public function jurusanKategori()
    {
        return $this->hasMany(ModelJurusanKategori::class, 'id_kategori');
    }

}
