<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->increments('pod_id');
            $table->string('pod_title',100)->nullable();
            $table->mediumtext('pod_desc')->nullable();
            $table->integer('pod_duration')->nullable();
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
        Schema::dropIfExists('podcasts');
    }
}
