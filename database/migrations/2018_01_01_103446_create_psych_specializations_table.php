<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsychSpecializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psych_specializations', function (Blueprint $table) {
            $table->increments('psych_sp_id');
            $table->integer('session_rate')->nullable();
            $table->integer('sp_id')->unsigned()->nullable();
            $table->integer('psych_id')->unsigned()->nullable();
            $table->foreign('sp_id')->references('sp_id')->on('specializations');
            $table->foreign('psych_id')->references('psych_id')->on('psychologists');
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
        Schema::dropIfExists('psych_specializations');
    }
}
