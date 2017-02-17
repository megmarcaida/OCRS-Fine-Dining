<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClmMenuMeal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clm_menu_meal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clm_menu_id')->unsigned()->index();
            $table->foreign('clm_menu_id')->references('id')->on('clm_menu')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('clm_meal_id')->unsigned()->index();
            $table->foreign('clm_meal_id')->references('id')->on('clm_meal')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('date_added');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
