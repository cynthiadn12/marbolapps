<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivescoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livescore', function (Blueprint $table) {
            $table->increments('id_livescore')->unique();
            $table->integer('waktu');
            $table->string('player1',256);
            $table->integer('do1');
            $table->string('player2',256);
            $table->integer('do2');
            $table->integer('skor1');
            $table->integer('skor2');
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
        Schema::dropIfExists('livescore');
    }
}
