<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClmItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clm_item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->decimal('default_price',18,2)->default(0.00);
            $table->integer('cl_user_id_created')->unsigned()->index();
            $table->foreign('cl_user_id_created')->references('id')->on('cl_user')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('clm_item_type_id')->unsigned()->index();
            $table->foreign('clm_item_type_id')->references('id')->on('clm_item_type')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('quantity_on_hand',18,2);

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
