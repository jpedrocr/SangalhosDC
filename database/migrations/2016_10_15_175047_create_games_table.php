<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competition_id')->unsigned();
            $table->foreign('competition_id')->references('id')->on('competitions');
            $table->integer('external_1st_id')->nullable();
            $table->integer('external_2nd_id')->nullable();
            $table->string('visited team');
            $table->string('visiting_team');
            $table->boolean('in');
            $table->boolean('out');
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
        Schema::drop('games');
    }
}
