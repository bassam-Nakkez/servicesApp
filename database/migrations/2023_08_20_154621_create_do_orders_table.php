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
        Schema::create('do_orders', function (Blueprint $table) {
            $table->id('doOrderId');
            $table->foreignId('orderID')->references('orderID')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->string('messageAfter')->nullable();
            $table->string('message')->nullable();
            $table->string('typeCode')->nullable();
            $table->string('categoryCode')->nullable();
            $table->string('severityCode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('do_orders');
    }
};
