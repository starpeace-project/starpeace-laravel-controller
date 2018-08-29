<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddsMapTownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_towns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('map_id')->unsigned();
            $table->integer('faction_id')->unsigned();
            $table->string('name', 50);
            $table->integer('location_x');
            $table->integer('location_y');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('map_towns');
    }
}
