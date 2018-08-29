<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesTycoonCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tycoon_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tycoon_id')->unsigned();
            $table->integer('faction_id')->unsigned();
            $table->string('name', 50);
            $table->timestamps();

            $table->foreign('tycoon_id')->references('id')->on('tycoons')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('faction_id')->references('id')->on('factions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tycoon_companies');
    }
}
