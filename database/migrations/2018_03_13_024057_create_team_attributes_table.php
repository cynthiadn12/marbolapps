<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_attributes', function (Blueprint $table) {
            $table->increments('id_team_attributes')->unique();
            $table->integer('team_fifa_api_id')->unsigned()->nullable();
            $table->integer('team_api_id')->unsigned()->nullable();
            $table->string('date');
            $table->integer('buildUpPlaySpeed');
            $table->string('buildUpPlaySpeedClass');
            $table->integer('buildUpPlayDribbling');
            $table->string('buildUpPlayDribblingClass');
            $table->integer('buildUpPlayPassing');
            $table->string('buildUpPlayPassingClass');
            $table->string('buildUpPlayPositioningClass');
            $table->integer('chanceCreationPassing');
            $table->string('chanceCreationPassingClass');
            $table->integer('chanceCreationCrossing');
            $table->string('chanceCreationCrossingClass');
            $table->integer('chanceCreationShooting');
            $table->string('chanceCreationShootingClass');
            $table->integer('defencePressure');
            $table->string('defencePressureClass');
            $table->integer('defenceAggression');
            $table->string('defenceAggressionClass');
            $table->integer('defenceTeamWidth');
            $table->string('defenceTeamWidthClass');
            $table->string('defenceDefenderLineClass');
            $table->timestamps();
        });

        Schema::table('team_attributes', function($table){
            $table->foreign('team_fifa_api_id')->references('id_team')->on('team')->onDelete('cascade');
            $table->foreign('team_api_id')->references('id_team')->on('team')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_attributes');
    }
}
