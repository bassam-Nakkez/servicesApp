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
        Schema::create('category_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoryID');
            $table->foreign('categoryID')->references('categoryID')->on('categories');
            $table->string('name');
            $table->text('path');
            $table->text('fullname');
            $table->string('relativename');
            $table->bigInteger('date');
            $table->integer('size');
            $table->string('type');
            $table->string('level1name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_photos');
    }
};
