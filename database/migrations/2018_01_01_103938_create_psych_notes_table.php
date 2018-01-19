<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsychNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psych_notes', function (Blueprint $table) {
            $table->increments('notes_id');
            $table->date('notes_date')->nullable();
            $table->time('notes_time')->nullable();
            $table->mediumtext('session_notes')->nullable();
            $table->integer('psych_id')->unsigned()->nullable();
            $table->integer('pat_id')->unsigned()->nullable();
            $table->integer('counsel_id')->unsigned()->nullable();
            $table->foreign('psych_id')->references('psych_id')->on('psychologists');
            $table->foreign('pat_id')->references('pat_id')->on('patients');
            $table->foreign('counsel_id')->references('counsel_id')->on('ecounselings');
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
        Schema::dropIfExists('psych_notes');
    }
}
