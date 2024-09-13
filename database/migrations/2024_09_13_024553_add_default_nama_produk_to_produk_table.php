<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        // Membuat tabel 'produk' jika belum ada
        Schema::create('produk', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('nama_produk');  // Nama produk
            $table->decimal('harga', 10, 2);  // Harga produk, dengan 10 digit dan 2 digit di belakang koma
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    public function down() {
        // Menghapus tabel 'produk' jika ada
        Schema::dropIfExists('produk');
    }
};