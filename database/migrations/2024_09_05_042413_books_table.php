<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul buku
            $table->string('author'); // Penulis
            $table->string('publisher'); // Penerbit
            $table->year('published_year'); // Tahun terbit
            $table->string('isbn')->unique(); // ISBN unik
            $table->integer('pages'); // Jumlah halaman
            $table->enum('status', ['Available', 'Checked Out', 'Reserved'])->default('Available'); // Status
            $table->timestamps(); // created_at dan updated_at otomatis
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
