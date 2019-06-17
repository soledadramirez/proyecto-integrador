<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Seguir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('seguir', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->bigInteger('id_usuario_seguido')->unsigned();
      $table->foreign('id_usuario_seguido')->references('id')->on('usuario')->onDelete('cascade');
      $table->bigInteger('id_usuario_seguidor')->unsigned();
      $table->foreign('id_usuario_seguidor')->references('id')->on('usuario')->onDelete('cascade');

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
