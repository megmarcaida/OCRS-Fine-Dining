<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CltranBillingPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cltran_billing_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cltran_billing_id')->unsigned()->index();
            $table->foreign('cltran_billing_id')->references('id')->on('cltran_billing')->onDelete('cascade')->onUpdate('cascade');
            $table->string('receipt_no',20);
            $table->decimal('amount',18,2);
            $table->dateTime('doc_date');
            $table->dateTime('entry_date');
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
