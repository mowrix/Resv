<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hotelrooms', function ($table) {
              $table->increments('id');
              $table->integer('hotelid')->unsigned();
              $table->integer('roomid')->unsigned();

              $table->foreign('hotelid')->references('id')->on('hotel');
              $table->foreign('roomid')->references('id')->on('rooms');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hotelrooms');
    }
}
