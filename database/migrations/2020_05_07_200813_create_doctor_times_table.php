<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_times', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('doctor_id')->unsigned();
            $table->string('start_days',50)->nullable();
            $table->string('end_days',50)->nullable();
            $table->string('strat_time',50)->nullable();
            $table->string('end_time',50)->nullable();
            $table->string('special_days',50)->nullable();
            $table->string('special_strat_time',50)->nullable();
            $table->string('special_end_time',50)->nullable();
            $table->string('opinion',255)->nullable();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
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
        Schema::dropIfExists('doctor_times');
    }
}
