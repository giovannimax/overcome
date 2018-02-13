<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->increments('convo_id');
            $table->integer('psych_id')->unsigned()->nullable();
            $table->foreign('psych_id')->references('psych_id')->on('psychologists');
            $table->integer('pat_id')->unsigned()->nullable();
            $table->foreign('pat_id')->references('pat_id')->on('patients');
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
        Schema::dropIfExists('conversations');
    }
}
