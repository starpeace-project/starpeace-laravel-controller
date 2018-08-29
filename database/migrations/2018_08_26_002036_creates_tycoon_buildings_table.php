<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesTycoonBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tycoon_buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tycoon_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->integer('world_id')->unsigned();
            $table->integer('map_town_id')->unsigned();
            $table->integer('building_id')->unsigned();
            $table->string('name', 50);
            $table->integer('upgrade_level')->default(1);
            $table->tinyInteger('upgradable')->default(1);
            $table->timestamps();

            $table->foreign('tycoon_id')->references('id')->on('tycoons')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('company_id')->references('id')->on('tycoon_companies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('world_id')->references('id')->on('worlds')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('map_town_id')->references('id')->on('map_towns')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
        Schema::dropIfExists('tycoon_buildings');
    }
}
