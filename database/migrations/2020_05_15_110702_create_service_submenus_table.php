<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceSubmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_submenus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('submenu_name',255)->nullable();
            $table->string('route_name',255)->nullable();
            $table->integer('subemnu')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->increments('id');
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
        Schema::dropIfExists('service_submenus');
    }
}
