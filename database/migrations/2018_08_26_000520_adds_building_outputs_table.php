<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddsBuildingOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_outputs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('building_id')->unsigned();
            $table->integer('variable_id')->unsigned();
            $table->integer('default_value')->default(10);
            $table->timestamps();

            $table->foreign('building_id')->references('id')->on('buildings')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('variable_id')->references('id')->on('building_variables')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building_outputs');
    }
}
