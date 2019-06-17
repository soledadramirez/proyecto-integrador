<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Resenias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('resenias', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->bigInteger('id_libro')->unsigned();
      $table->foreign('id_libro')->references('id')->on('libros')->onDelete('cascade');
      $table->bigInteger('id_usuario')->unsigned();
      $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');

      $table->string('review');

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
        //
    }
}
