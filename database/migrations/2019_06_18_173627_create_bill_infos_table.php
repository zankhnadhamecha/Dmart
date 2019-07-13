<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bill_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->double('amount',8,2);
            $table->timestamps();


            $table->foreign('bill_id')->references('id')->on('bills')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_infos');
    }
}
