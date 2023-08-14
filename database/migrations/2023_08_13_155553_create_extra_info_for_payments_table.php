<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('extra_info_for_payments', function (Blueprint $table) {
            $table->id('extraInfoForPayment_id');
            $table->unsignedBigInteger('orderID')->nullable();
            $table->date('datepaye')->nullable();
            $table->string('closepaidinvoices')->nullable();
            $table->integer('accountid')->nullable();
            $table->string('payment')->nullable();
            $table->string('comment')->nullable();
            $table->foreign('orderID')->references('orderID')->on('orders');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_info_for_payments');
    }
};
