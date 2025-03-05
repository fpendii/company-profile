<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelJurusanKategori extends Model
{
    use HasFactory;

    protected $table = 'jurusan_kategori';


    protected $fillable = [
        'id_jurusan',
        'id_kategori',
    ];

    public function jurusan()
    {
        return $this->belongsTo(ModelJurusan::class, 'id_jurusan');
    }
}
