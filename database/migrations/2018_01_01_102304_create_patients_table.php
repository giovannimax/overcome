<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('pat_id');
            $table->string('pat_fname',100)->nullable();
            $table->string('pat_mname',30)->nullable();
            $table->string('pat_lname',100)->nullable();
            $table->integer('pat_age')->nullable();
            $table->string('pat_gndr',10)->nullable();
            $table->mediumtext('pat_hist')->nullable();
            $table->date('pat_bdate')->nullable();
            $table->mediumtext('birth_place')->nullable();
            $table->string('ctznshp',30)->nullable();
            $table->string('religion',30)->nullable();
            $table->string('educ_attain',50)->nullable();
            $table->string('school',100)->nullable();
            $table->string('occupation',100)->nullable();
            $table->string('card_type',50)->nullable();
            $table->string('card_holder_name',100)->nullable();
            $table->integer('card_no')->nullable();
            $table->string('sec_code',100)->nullable();
            $table->date('exp_date')->nullable();
            $table->mediumtext('diagnosis',100);
            $table->integer('psych_id')->unsigned();
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
        Schema::dropIfExists('patients');
    }
}
