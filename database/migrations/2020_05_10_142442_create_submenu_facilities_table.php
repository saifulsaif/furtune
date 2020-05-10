<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmenuFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submenu_facilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('item_name')->nullable();
            $table->integer('submenu_id')->unsigned();
            $table->foreign('submenu_id')->references('id')->on('submenuses')->onDelete('cascade');
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
        Schema::dropIfExists('submenu_facilities');
    }
}
