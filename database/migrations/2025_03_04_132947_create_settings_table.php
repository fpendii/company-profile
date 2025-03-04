<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_usaha');
            $table->string('slogan')->nullable();
            $table->text('penjelasan_usaha')->nullable();
            $table->string('nomer_telepon')->nullable();
            $table->text('alamat')->nullable();
            $table->text('tentang_usaha')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
