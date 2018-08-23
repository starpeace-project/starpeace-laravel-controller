<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesWorldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worlds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('galaxy_id')->unsigned();
            $table->integer('map_id')->unsigned();
            $table->string('name', 50);
            $table->string('display_name', 50);
            $table->tinyInteger('use_whitelist')->default(0);
            $table->tinyInteger('use_blacklist')->default(1);
            $table->integer('year')->default(2000);
            $table->integer('month')->default(1);
            $table->integer('day')->default(1);
            $table->timestamps();

            $table->foreign('galaxy_id')->references('id')->on('galaxies')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('map_id')->references('id')->on('maps')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worlds');
    }
}
