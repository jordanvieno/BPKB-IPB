<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixOperationsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('operations');

        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->string('category')->unique();
            $table->integer('value')->default(0);
            $table->integer('max_value')->default(300);
        });
    }

    public function down()
    {
        Schema::dropIfExists('operations');
    }
}
