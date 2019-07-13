<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bill_id');
            $table->string('type');
            //$table->unsignedBigInteger('offer_id');
            $table->timestamps();


            $table->foreign('bill_id')->references('id')->on('bills')->onDelete('CASCADE')->onUpdate('CASCADE');
            // $table->foreign('offer_id')->references('id')->on('offers')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
