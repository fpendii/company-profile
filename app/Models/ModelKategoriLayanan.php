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
        return $this->hasMany(ModelJurusan::class, 'id_kategori_layanan');
    }
}
