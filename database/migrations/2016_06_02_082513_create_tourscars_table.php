<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourscarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourscars', function ($table) {
              $table->increments('id');
              $table->integer('tourid')->unsigned();
              $table->integer('carid')->unsigned();
              $table->foreign('tourid')->references('id')->on('tours');
              $table->foreign('carid')->references('id')->on('cars');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tourscars');
    }
}
