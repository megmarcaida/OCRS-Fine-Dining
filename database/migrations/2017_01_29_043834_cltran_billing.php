<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CltranBilling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cltran_billing', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clm_table_id')->unsigned()->index();
            $table->foreign('clm_table_id')->references('id')->on('clm_table')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tran_no',20);
            $table->decimal('gross_amount',18,2)->nullable()->default(0.00);
            $table->decimal('paid_amount',18,2)->nullable()->default(0.00);
            $table->dateTime('doc_date');
            $table->dateTime('entry_date');
            $table->tinyInteger('is_fully_paid')->nullable()->default(0);
            $table->string('billing_tag',10);
            $table->decimal('discount_amount',18,2)->nullable();
            $table->decimal('vat_base_percentage',3,2)->nullable();
            $table->decimal('vat_amount',3,2)->nullable();
            $table->integer('cl_user_id_assigned')->unsigned()->index();
            $table->foreign('cl_user_id_assigned')->references('id')->on('cl_user')->onDelete('cascade')->onUpdate('cascade');
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
