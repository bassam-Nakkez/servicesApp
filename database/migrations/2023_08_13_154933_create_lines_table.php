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
        Schema::create('lines', function (Blueprint $table) {
            $table->id('lineID');
            $table->unsignedBigInteger('fk_product')->nullable();
            $table->foreign('fk_product')->references('productID')->on('products');
            $table->unsignedBigInteger('orderID')->nullable();
            $table->foreign('orderID')->references('orderID')->on('orders');
            $table->string('qty')->nullable();
            $table->string('date_start')->nullable();
            $table->string('date_end')->nullable();
            $table->string('price')->nullable();
            $table->string('subPrice')->nullable();
            $table->string('multicurrency_subprice')->nullable();
            $table->string('multicurrency_total_ttc')->nullable();
            $table->string('multicurrency_total_ht')->nullable();
            $table->string('multicurrency_total_tva')->nullable();
            $table->string('multicurrency_tx')->nullable();
            $table->string('multicurrency_code')->nullable();
            $table->string('tva_tx')->nullable();
            $table->string('total_ht')->nullable();
            $table->string('total_tva')->nullable();
            $table->string('total_ttc')->nullable();
            $table->string('total_localtax1')->nullable();
            $table->string('total_localtax2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lines');
    }
};
