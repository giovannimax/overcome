<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateECounselingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecounselings', function (Blueprint $table) {
            $table->increments('counsel_id');
            $table->date('counsel_date')->nullable();
            $table->time('counsel_time')->nullable();
            $table->string('counsel_type',20)->nullable();
            $table->string('counsel_status',20)->nullable();
            $table->integer('session_length')->nullable();
            $table->integer('amt_paid')->nullable();
            $table->string('psy_status',20)->nullable();
            $table->integer('psych_id')->unsigned()->nullable();
            $table->integer('pat_id')->unsigned()->nullable();
            $table->foreign('psych_id')->references('psych_id')->on('psychologists');
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
        Schema::dropIfExists('e-counselings');
    }
}
