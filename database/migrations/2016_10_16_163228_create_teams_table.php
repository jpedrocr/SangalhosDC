<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('season_id')->unsigned();
            $table->foreign('season_id')->references('id')->on('seasons');
            $table->integer('name_id')->unsigned();
            $table->foreign('name_id')->references('id')->on('names');
            $table->string('agegroup')->nullable();
            $table->string('level')->nullable();
            $table->string('gender')->nullable();
            $table->string('image_slug')->nullable();
            $table->integer('external_id')->nullable();
            $table->string('internal_id')->nullable();
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
        Schema::drop('teams');
    }
}
