<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesTycoonImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tycoon_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tycoon_id')->unsigned();
            $table->string('path');
            $table->string('filename', 125);
            $table->timestamps();

            $table->foreign('tycoon_id')->references('id')->on('tycoons')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tycoon_images');
    }
}
