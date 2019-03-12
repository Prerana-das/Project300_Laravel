<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('tour_ID');

            $table->unsignedBigInteger('catagoryID')->index();
            $table->foreign('catagoryID')->references('catagoryID')->on('categories')->onDelete('cascade')->onUpdate('No Action');

            $table->unsignedBigInteger('countryID')->index();
            $table->foreign('countryID')->references('countryID')->on('countries')->onDelete('cascade')->onUpdate('No Action');

            $table->unsignedBigInteger('cityID')->index();
            $table->foreign('cityID')->references('cityID')->on('cities')->onDelete('cascade')->onUpdate('No Action');

            $table->unsignedBigInteger('userID')->index()->nullable();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');

            $table->binary('tour_length');
            $table->string('tour_description');
            $table->string('imageName');
            $table->boolean('isDefault')->default(0);
            $table->string('start_place');
            $table->string('start_time');
            $table->string('return_time');
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
        Schema::dropIfExists('tours');
    }
}