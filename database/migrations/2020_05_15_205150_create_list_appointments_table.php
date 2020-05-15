<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName',128)->nullable();
            $table->string('lastName',128)->nullable();
            $table->string('email',128)->nullable();
            $table->string('dateOfAppoinment',64)->nullable();
            $table->string('timeAppoinment',64)->nullable();
            $table->string('phoneNumber',100)->nullable();
            $table->text('diseaseTopic')->nullable();
            $table->integer('doctor_id')->nullable();
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
        Schema::dropIfExists('list_appointments');
    }
}
