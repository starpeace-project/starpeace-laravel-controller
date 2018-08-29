<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FactionsBonuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factions_bonuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faction_id')->unsigned();
            $table->integer('faction_bonus_id')->unsigned();
            $table->integer('value')->default(10);

            $table->foreign('faction_id')->references('id')->on('factions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('faction_bonus_id')->references('id')->on('faction_bonuses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factions_bonuses');
    }
}
