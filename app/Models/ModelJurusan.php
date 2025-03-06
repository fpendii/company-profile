<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelJurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';

    protected $fillable = [
        'id_kategori_layanan',
        'nama_jurusan',
    ];


    public function kategoriLayanan()
    {
        return $this->belongsToMany(
            ModelKategoriLayanan::class,
            'jurusan_kategori',
            'id_jurusan',
            'id_kategori'
        );
    }
}
