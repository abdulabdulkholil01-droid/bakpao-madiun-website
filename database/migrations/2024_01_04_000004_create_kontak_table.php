<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel kontak
     */
    public function up(): void
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('nomor_telepon');
            $table->text('pesan');
            $table->enum('status', ['baru', 'dibaca', 'dibalas'])->default('baru');
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi
     */
    public function down(): void
    {
        Schema::dropIfExists('kontak');
    }
};
