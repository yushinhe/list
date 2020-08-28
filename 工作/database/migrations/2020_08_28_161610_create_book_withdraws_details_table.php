<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookWithdrawsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_withdraws_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('withdraw_id');
            $table->foreign('withdraw_id')->references('id')->on('book_withdraws');
            $table->string('object');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_withdraws_details');
    }
}
