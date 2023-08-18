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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('orderID');
            $table->integer('socid')->nullable();
            $table->integer('type')->nullable();
            $table->unsignedBigInteger('UserID')->nullable();
            $table->foreign('UserID')->references('UserID')->on('users');
            $table->integer('contactID')->nullable();
            $table->date('date')->nullable();
            $table->string('note_public')->nullable();
            $table->boolean('subscriptionType')->nullable();
            $table->date('date_Commande')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('isRecurrent')->default(false);
            $table->float('multicurrency_subprice')->nullable();
            $table->float('multicurrency_tx')->nullable();
            $table->float('multicurrency_code')->nullable();
            $table->float('multicurrency_total_ttc')->nullable();
            $table->float('multicurrency_total_tva')->nullable();
            $table->float('tva_tx')->nullable();
            $table->float('total_ht')->nullable();
            $table->float('total_tva')->nullable();
            $table->float('total_localtax1')->nullable();
            $table->float('total_localtax2')->nullable();
            $table->float('total_ttc')->nullable();
            $table->float('multicurrency_total_ht')->nullable();
            $table->float('subprice')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
