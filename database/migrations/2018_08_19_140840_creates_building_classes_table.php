<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesBuildingClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('building_type_id')->unsigned();
            $table->integer('faction_id')->unsigned();
            $table->timestamps();

            $table->foreign('building_type_id')->references('id')->on('building_types')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->foreign('faction_id')->references('id')->on('factions')->onDelete('RESTRICT')->onUpdate('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building_classes');
    }
}
