<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelSetting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'nama_usaha',
        'slogan',
        'penjelasan_usaha',
        'nomer_telepon',
        'alamat',
        'tentang_usaha',
        'visi',
        'misi',
        'email',
    ];
}
