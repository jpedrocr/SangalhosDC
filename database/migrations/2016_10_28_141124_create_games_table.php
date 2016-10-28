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
            $table->integer('week_id')->unsigned()->nullable();
            $table->foreign('week_id')->references('id')->on('weeks');
            $table->datetime('happening_at')->nullable();
            $table->integer('team_id')->unsigned()->nullable();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->string('other_team')->nullable();
            $table->boolean('home');
            $table->boolean('neutral')->default(false);
            $table->integer('game_id')->unsigned()->nullable();
            $table->integer('fpb_id')->unsigned()->nullable();
            $table->string('competition');
            $table->string('location')->nullable();
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
