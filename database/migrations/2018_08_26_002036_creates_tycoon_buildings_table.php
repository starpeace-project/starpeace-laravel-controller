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
            $table->integer('map_id')->unsigned();
            $table->string('name', 50);
            $table->integer('upgrade_level')->default(1);
            $table->tinyInteger('upgradable')->default(1);
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
        Schema::dropIfExists('tycoon_buildings');
    }
}
