<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesGalaxiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galaxies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('galaxy_type_id')->unsigned();
            $table->string('name', 50);
            $table->string('display_name', 50);
            $table->timestamps();

            $table->foreign('galaxy_type_id')->references('id')->on('galaxy_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galaxies');
    }
}
