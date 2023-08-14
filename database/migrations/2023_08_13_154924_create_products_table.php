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
        Schema::create('products', function (Blueprint $table) {
            $table->id('productID');
            $table->unsignedBigInteger('categoryID');
            $table->foreign('categoryID')->references('categoryID')->on('categories');
            $table->string('lable');
            $table->float('price');
            $table->float('priceMin');
            $table->float('priceIncludesTax');
            $table->string('condtion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
