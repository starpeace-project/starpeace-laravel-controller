<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorldsTycoons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worlds_tycoons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('world_id')->unsigned();
            $table->integer('tycoon_id')->unsigned();
            $table->integer('last_location_x')->nullable();
            $table->integer('last_location_y')->nullable();
            $table->dateTime('last_request')->nullable();
            $table->timestamps();

            $table->unique(['world_id', 'tycoon_id']);

            $table->foreign('world_id')->references('id')->on('worlds')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('tycoon_id')->references('id')->on('tycoons')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worlds_tycoons');
    }
}
