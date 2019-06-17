<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prestamos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('prestamos', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->bigInteger('id_libro')->unsigned();
      $table->foreign('id_libro')->references('id')->on('libros')->onDelete('cascade');
      $table->bigInteger('id_user_receive')->unsigned();
      $table->foreign('id_user_receive')->references('id')->on('usuario')->onDelete('cascade');
      $table->bigInteger('id_user_lend')->unsigned();
      $table->foreign('id_user_lend')->references('id')->on('usuario')->onDelete('cascade');
      $table->dateTime('date');
     $table->timestamps();

      });
        //
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
