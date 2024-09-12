<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('keranjang')) {
            Schema::create('keranjang', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('produk_id');
                $table->integer('jumlah');
                $table->decimal('harga_total', 10, 2);
                $table->timestamps();
    
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');
            });
        }
    }
    
    public function down()
    {
        Schema::dropIfExists('keranjang');
    }
    
};
