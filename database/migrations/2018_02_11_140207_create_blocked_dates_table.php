<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockedDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocked_dates', function (Blueprint $table) {
            $table->increments('blocked_id');
            $table->date('blocked_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('psych_id')->unsigned()->nullable();
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
        Schema::dropIfExists('blocked_dates');
    }
}
