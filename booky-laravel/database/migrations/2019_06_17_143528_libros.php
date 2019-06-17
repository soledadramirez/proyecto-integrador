<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Libros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('libros', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->bigInteger('id_estado')->unsigned();
      $table->foreign('id_estado')->references('id')->on('estado')->onDelete('cascade');
      $table->bigInteger('id_titulo')->unsigned();
      $table->foreign('id_titulo')->references('id')->on('titulo')->onDelete('cascade');
      $table->bigInteger('id_autor')->unsigned();
      $table->foreign('id_autor')->references('id')->on('autor')->onDelete('cascade');
      $table->bigInteger('id_usuario')->unsigned();
      $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
      $table->binary('image');
      $table->string('language');
      $table->string('edition');
      $table->dateTime('year');
      $table->dateTime('return_date');
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
