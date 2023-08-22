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
        Schema::create('reports', function (Blueprint $table) {
            $table->id('reportID');
            $table->unsignedBigInteger('empID');
            $table->foreign('empID')->references('userID')->on('users');
            $table->string('subject')->nullable();
            $table->string('message')->nullable();
            $table->string('typeCode')->nullable();
            // $table->unsignedBigInteger('categoryID');
            // $table->foreign('categoryID')->references('categoryID')->on('categories');
            $table->string('severityCode')->nullable();
            $table->unsignedBigInteger('lineID');
            $table->foreign('lineID')->references('lineID')->on('lines');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('help_forms');
    }
};
