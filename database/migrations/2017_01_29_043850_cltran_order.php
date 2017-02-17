<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CltranOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cltran_order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clm_menu_id')->unsigned()->index();
            $table->foreign('clm_menu_id')->references('id')->on('clm_menu')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cltran_billing_id')->unsigned()->index();
            $table->foreign('cltran_billing_id')->references('id')->on('cltran_billing')->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('is_served')->default(0);
            $table->integer('quantity')->default(1);
            $table->decimal('selling_price',18,2);
            $table->decimal('amount',18,2);
            $table->dateTime('date_added');
            $table->tinyInteger('is_discontinued')->nullable();
            $table->string('discontinued_reason')->nullable();
            $table->longText('note')->nullable();
            $table->tinyInteger('is_free')->default(0);
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
