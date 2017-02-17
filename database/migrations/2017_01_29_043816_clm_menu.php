<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClmMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clm_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clm_item_id')->unsigned()->index();
            $table->foreign('clm_item_id')->references('id')->on('clm_item')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('clm_bundle_id')->unsigned()->index()->nullable();
            $table->foreign('clm_bundle_id')->references('id')->on('clm_bundle')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name',100);
            $table->string('description',255);
            $table->decimal('selling_price',18,2);
            $table->integer('cl_user_id_created')->unsigned()->index();
            $table->foreign('cl_user_id_created')->references('id')->on('cl_user')->onDelete('cascade')->onUpdate('cascade');
            $table->string('image_path',50)->nullable();
            $table->binary('image_byte')->nullable();
            $table->tinyInteger('is_available');
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
