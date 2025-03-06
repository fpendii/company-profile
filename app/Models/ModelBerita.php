<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelBerita extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'berita';

    // Kolom yang dapat diisi mass-assignment
    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'gambar',
        'penulis',
        'status',
        'tanggal_publish',
    ];

    // Kolom yang tidak boleh diisi secara mass-assignment
    // protected $guarded = ['id'];

    // Format tanggal yang digunakan oleh model
    protected $dates = ['tanggal_publish', 'created_at', 'updated_at'];
}
