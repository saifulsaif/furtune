<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('school_name');
            $table->string('location');
            $table->string('distance');
            $table->string('students');
            $table->string('teachers');
            $table->string('before');
            $table->string('during');
            $table->string('after');
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
        Schema::dropIfExists('csrs');
    }
}
