<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsychologistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psychologists', function (Blueprint $table) {
            $table->unsignedInteger('psych_id');
            $table->primary('psych_id');
            $table->string('psych_fname',100)->nullable();
            $table->string('psych_mname',30)->nullable();
            $table->string('psych_lname',100)->nullable();
            $table->date('psych_dob')->nullable();
            $table->string('psych_gndr',10)->nullable();
            $table->integer('psych_age')->nullable();
            $table->string('psych_email',50)->nullable();
            $table->char('psych_mobilephone',30)->nullable();
            $table->char('psych_telphone',30)->nullable();
            $table->string('clinic_name',100)->nullable();
            $table->mediumtext('clinic_address')->nullable();
            $table->text('clinic_province')->nullable();
            $table->string('clinic_email',50)->nullable();
            $table->char('clinic_phone',30)->nullable();
            $table->string('license_no',50)->nullable();
            $table->string('license_title',100)->nullable();
            $table->string('training',255)->nullable();
            $table->mediumtext('about')->nullable();
            $table->string('psych_status',10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psychologists');
    }
}
