<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight',function(Blueprint $table){
          $table->increments('id');
          $table->string('From');
          $table->string('Destination');
          $table->string('airline');
          $table->time('departure');
          $table->time('arrival');
          $table->float('amount');
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
         Schema::drop('flight');
    }
}
