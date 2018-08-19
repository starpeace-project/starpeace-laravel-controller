<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('map_category_id')->unsigned();
            $table->string('name',50);
            $table->string('display_name', 50);
            $table->integer('map_x')->unsigned();
            $table->integer('map_y')->unsigned();
            $table->string('location');
            $table->string('filename');
            $table->timestamps();

            $table->foreign('map_category_id')->references('id')->on('map_categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maps');
    }
}
