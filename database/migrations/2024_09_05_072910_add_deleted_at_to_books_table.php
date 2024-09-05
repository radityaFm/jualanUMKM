<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class AddDeletedAtToBooksTable extends Migration
{
    public function up()
    {
    Schema::table('books', function (Blueprint $table) {
        $table->softDeletes(); // This will add the 'deleted_at' column for soft deletes
    });
}

public function down()
{
    Schema::table('books', function (Blueprint $table) {
        $table->dropSoftDeletes(); // This will remove the 'deleted_at' column
    });
}
}