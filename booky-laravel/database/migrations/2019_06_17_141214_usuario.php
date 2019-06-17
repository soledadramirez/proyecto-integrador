<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('usuario', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('last_name');
          $table->string('email');
          $table->binary('image');
          $table->dateTime('birth_date');
          $table->char('rate', 100);
          $table->bigInteger('id_genero')->unsigned();
          $table->foreign('id_genero')->references('id')->on('genero')->onDelete('cascade');
          $table->string('password');
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
