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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->text('konten');
            $table->string('penulis')->nullable();  // Menyimpan nama penulis, bisa kosong
            $table->string('sumber')->nullable();  // Menyimpan nama sumber berita
            $table->string('url')->nullable();  // Menyimpan URL artikel
            $table->string('gambar_url')->nullable();  // Menyimpan URL gambar terkait artikel
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
