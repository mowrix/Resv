<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightclassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('flightclass', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->double('price', 10, 2);
            $table->rememberToken();
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
          Schema::drop('flightclass');
    }
}
