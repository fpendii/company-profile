<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelLayanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';

    protected $fillable = [
        'nama_layanan',
        'penjelasan',
        'total_client',
    ];

    public function kategoriLayanan()
    {
        return $this->hasMany(ModelKategoriLayanan::class, 'id_layanan');
    }

}
