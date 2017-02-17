<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClmBundle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clm_bundle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
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
