<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpertTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_team', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('name');
            $table->string('designation');
            $table->string('from');
            $table->string('experience');
            $table->string('specialization');
            $table->string('intertest');
            $table->text('descreption');
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
        Schema::dropIfExists('expert_team');
    }
}
