<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlyClflightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FlyClflight', function ($table) {
            $table->increments('id');
            $table->integer('flightid')->unsigned();
            $table->integer('flyclassid')->unsigned();

            $table->foreign('flightid')->references('id')->on('flight');
            $table->foreign('flyclassid')->references('id')->on('flightclass');

    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('FlyClflightTable');
    }
}
