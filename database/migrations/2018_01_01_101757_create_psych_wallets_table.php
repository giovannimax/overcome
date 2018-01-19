<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsychWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psych_wallets', function (Blueprint $table) {
            $table->increments('pay_id');
            $table->string('cardtype',50)->nullable();
            $table->string('cardholdername',255)->nullable();
            $table->string('cardno',50)->nullable();
            $table->integer('sec_code')->nullable();
            $table->date('expdate')->nullable();
            $table->integer('cur_earnings')->nullable();
            $table->integer('amtpaid')->nullable();
            $table->date('paydate')->nullable();
            $table->time('paytime')->nullable();
            $table->integer('psych_id')->unsigned();
            $table->foreign('psych_id')->references('psych_id')->on('psychologists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psych_wallets');
    }
}
