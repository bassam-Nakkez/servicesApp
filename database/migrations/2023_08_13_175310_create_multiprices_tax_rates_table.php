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
        Schema::create('multiprices_tax_rates', function (Blueprint $table) {
            $table->id('productID')->unsigned();
            $table->foreign('productID')->references('productID')->on('products');
            $table->float('first');
            $table->float('second');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiprices_tax_rates');
    }
};
