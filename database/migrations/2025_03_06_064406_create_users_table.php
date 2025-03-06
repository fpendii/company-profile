<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Menambahkan kolom id (auto-increment)
            $table->string('name');  // Nama pengguna
            $table->string('email')->unique();  // Email pengguna yang harus unik
            $table->string('password');  // Password pengguna
            $table->rememberToken();  // Untuk "remember me" functionality
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
