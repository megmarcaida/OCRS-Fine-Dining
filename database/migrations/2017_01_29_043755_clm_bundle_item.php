<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClmBundleItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clm_bundle_item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clm_item_id')->unsigned()->index();
            $table->foreign('clm_item_id')->references('id')->on('clm_item')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('clm_bundle_id')->unsigned()->index();
            $table->foreign('clm_bundle_id')->references('id')->on('clm_bundle')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity')->default(1);
            $table->integer('cl_user_id_created')->unsigned()->index();
            $table->foreign('cl_user_id_created')->references('id')->on('cl_user')->onDelete('cascade')->onUpdate('cascade');

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
