<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->id();
            $table->string('isbn',10);
            $table->string('titulo',200);
            $table->float('precio',8,2);
            $table->integer('stock');
            $table->unsignedBigInteger('editorial');
            $table->foreign('editorial')->references('id')->on('editorial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro');
    }
}
