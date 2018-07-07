<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group', function (Blueprint $table) {
            $table->increments('id_group');
            $table->integer('league_id')->unsigned()->nullable();
            $table->string('group_name');
            $table->string('date');
            $table->timestamps();
        });

        Schema::table('group', function($table){
            $table->foreign('league_id')->references('id_league')->on('league')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group');
    }
}
