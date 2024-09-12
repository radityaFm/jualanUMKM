<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class AddDeletedAtToBooksTable extends Migration
{
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            // Cek apakah kolom deleted_at belum ada
            if (!Schema::hasColumn('books', 'deleted_at')) {
                $table->softDeletes(); // Menambahkan soft deletes
            }
        });
    }

    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Menghapus soft deletes jika rollback
        });
    }
}
