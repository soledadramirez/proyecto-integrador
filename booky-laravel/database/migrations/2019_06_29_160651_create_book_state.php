<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookState extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('book_state', function(Blueprint $table){
        $table->bigIncrements('id');
        $table->bigInteger('book_id')->unsigned();
        $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
        $table->bigInteger('state_id')->unsigned();
        $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_state');
    }
}
