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
        Schema::create('sub__faqs', function (Blueprint $table) {
            $table->id('subFaqID');
            $table->unsignedBigInteger('faqID');
            $table->foreign('faqID')->references('faqID')->on('faqs');
            $table->string('label')->nullable();
            $table->string('color')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub__faqs');
    }
};
