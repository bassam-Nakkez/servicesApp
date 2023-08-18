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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('contactID');
            // $table->string('firstName', 25)->nullable();
            $table->string('lastName',25)->nullable();
            $table->string('email', 60 )->unique();
            $table->integer('zip')->nullable();
            $table->string('town', 60 )->nullable();
            $table->text('address')->nullable();
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('userID')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
