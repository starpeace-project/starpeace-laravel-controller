<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesTycoonBuildingInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tycoon_building_inputs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tycoon_building_id')->unsigned();
            $table->integer('building_input_id')->unsigned();
            $table->integer('input_value')->unsigned();

            $table->foreign('tycoon_building_id')->references('id')->on('tycoon_buildings')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('building_input_id')->references('id')->on('building_inputs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tycoon_building_inputs');
    }
}
