<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_plans', function (Blueprint $table) {
            $table->bigIncrements('plan_ID');
            $table->unsignedBigInteger('tour_ID')->index()->nullable();
            $table->foreign('tour_ID')->references('tour_ID')->on('tours')->onDelete('cascade')->onUpdate('No Action');

            $table->unsignedBigInteger('userID')->index()->nullable();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');

            $table->string('plan_title');
            $table->text('description');
            $table->string('others_details');
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
        Schema::dropIfExists('tour_plans');
    }
}
