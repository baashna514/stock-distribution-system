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
            // $table->unsignedInteger('order_id')->nullable()->unsigned();
            // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->string('payment_status');
            $table->string('total_amount');
            $table->string('received_amount');
            $table->string('due_amount');
            $table->string('payment_mode');
            $table->unsignedInteger('credit_card_id')->nullable()->unsigned();
            $table->foreign('credit_card_id')->references('id')->on('credit_cards')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('cheque_id')->nullable()->unsigned();
            $table->foreign('cheque_id')->references('id')->on('cheques')->onDelete('cascade')->onUpdate('cascade');
            $table->string('payment_note');
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
        Schema::dropIfExists('payments');
    }
}
