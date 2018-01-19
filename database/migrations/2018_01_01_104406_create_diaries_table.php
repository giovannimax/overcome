<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries', function (Blueprint $table) {
            $table->increments('dia_id');
            $table->date('dia_date')->nullable();
            $table->time('dia_time')->nullable();
            $table->longtext('dia_content')->nullable();
            $table->integer('pat_id')->unsigned()->nullable();
            $table->foreign('pat_id')->references('pat_id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diaries');
    }
}
