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
            $table->unsignedBigInteger('employID')->nullable();
            $table->foreign('employID')->references('employID')->on('users');
            $table->integer('contactID')->nullable();
            $table->string('date')->nullable();
            $table->string('note_public')->nullable();
            $table->boolean('subscriptionType')->nullable();
            $table->string('date_Commande')->nullable();
            $table->integer('status')->default(false);
            $table->boolean('isRecurrent')->default(false);
            $table->string('multicurrency_subprice')->nullable();
            $table->string('multicurrency_tx')->nullable();
            $table->string('multicurrency_code')->nullable();
            $table->string('multicurrency_total_ttc')->nullable();
            $table->string('multicurrency_total_tva')->nullable();
            $table->string('tva_tx')->nullable();
            $table->string('total_ht')->nullable();
            $table->string('total_tva')->nullable();
            $table->string('total_localtax1')->nullable();
            $table->string('total_localtax2')->nullable();
            $table->string('total_ttc')->nullable();
            $table->string('multicurrency_total_ht')->nullable();
            $table->string('subprice')->nullable();
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
