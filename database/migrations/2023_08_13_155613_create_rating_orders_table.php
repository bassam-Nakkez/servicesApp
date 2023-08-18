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
        Schema::create('rating_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderID');
            $table->unsignedBigInteger('lineID');
            $table->foreign('lineID')->references('lineID')->on('lines');
            $table->string('options_efficacite')->nullable();
            $table->string('options_ponctualite')->nullable();
            $table->string('options_presentation')->nullable();
            $table->string('options_avisgeneral')->nullable();
            $table->string('options_iseval')->nullable();
            $table->foreign('orderID')->references('orderID')->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating_orders');
    }
};
