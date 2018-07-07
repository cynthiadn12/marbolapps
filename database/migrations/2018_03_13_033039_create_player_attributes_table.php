<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_attributes', function (Blueprint $table) {
            $table->increments('id_player_attributes')->unique();
            $table->integer('player_fifa_api_id')->unsigned()->nullable();
            $table->integer('player_api_id')->unsigned()->nullable();
            $table->string('date');
            $table->integer('overall_rating');
            $table->integer('potential');
            $table->string('preferred_foot');
            $table->string('attacking_work_rate');
            $table->string('defensive_work_rate');
            $table->integer('crossing');
            $table->integer('finishing');
            $table->integer('heading_accuracy');
            $table->integer('short_passing');
            $table->integer('volleys');
            $table->integer('dribbling');
            $table->integer('curve');
            $table->integer('free_kick_accuracy');
            $table->integer('long_passing');
            $table->integer('ball_control');
            $table->integer('acceleration');
            $table->integer('sprint_speed');
            $table->integer('agility');
            $table->integer('reactions');
            $table->integer('balance');
            $table->integer('shot_power');
            $table->integer('jumping');
            $table->integer('stamina');
            $table->integer('strength');
            $table->integer('long_shots');
            $table->integer('aggression');
            $table->integer('interceptions');
            $table->integer('positioning');
            $table->integer('vision');
            $table->integer('penalities');
            $table->integer('marking');
            $table->integer('standing_tackle');
            $table->integer('sliding_tackle');
            $table->integer('gk_diving');
            $table->integer('gk_handling');
            $table->integer('gk_kicking');
            $table->integer('gk_positioning');
            $table->integer('gk_reflexes');
            $table->timestamps();
        });

        Schema::table('player_attributes', function($table){
            $table->foreign('player_fifa_api_id')->references('id_player')->on('player')->onDelete('cascade');
            $table->foreign('player_api_id')->references('id_player')->on('player')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_attributes');
    }
}
