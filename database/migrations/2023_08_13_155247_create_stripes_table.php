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
        Schema::create('stripes', function (Blueprint $table) {
            $table->id();
            $table->float('amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('use_stripe_sdk')->nullable();
            $table->unsignedBigInteger('orderID')->nullable();
            $table->foreign('orderID')->references('orderID')->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stripes');
    }
};
