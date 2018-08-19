<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesMapBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('map_id')->unsigned();
            $table->integer('location_x')->unsigned();
            $table->integer('location_y')->unsigned();
            $table->integer('building_class_id')->unsigned();
            $table->integer('building_id')->unsigned();
            $table->tinyInteger('deterioration_level')->unsigned()->default(0);
            $table->timestamps();

            $table->foreign('building_class_id')->references('id')->on('building_classes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('building_id')->references('id')->on('buildings')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('map_buildings');
    }
}
