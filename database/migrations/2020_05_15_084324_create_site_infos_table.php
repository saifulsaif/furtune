<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->string('applicaton_name');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('hoteline');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('instagram');
            $table->string('footer_info');
            $table->string('app_icon');
            $table->string('app_link');
            $table->string('twitter');
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
        Schema::dropIfExists('site_infos');
    }
}
