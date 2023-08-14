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
            $table->id('productID');
            $table->unsignedBigInteger('orderID')->nullable();
            $table->foreign('orderID')->references('orderID')->on('orders');
            // $table->unsignedBigInteger('lineOPtionId')->nullable();
            // $table->foreign('lineOPtionId')->references('lineOPtionId')->on('line_options');
            $table->string('qty')->nullable();
            $table->date('dateStart')->nullable();
            $table->date('dateEnd')->nullable();
            $table->float('price')->nullable();
            $table->float('subPrice')->nullable();
            $table->float('multicurrency_subprice')->nullable();
            $table->float('multicurrency_total_ttc')->nullable();
            $table->float('multicurrency_total_ht')->nullable();
            $table->float('multicurrency_total_tva')->nullable();
            $table->float('multicurrency_tx')->nullable();
            $table->float('multicurrency_code')->nullable();
            $table->float('tva_tx')->nullable();
            $table->float('total_ht')->nullable();
            $table->float('total_tva')->nullable();
            $table->float('total_ttc')->nullable();
            $table->float('total_localtax1')->nullable();
            $table->float('total_localtax2')->nullable();
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
