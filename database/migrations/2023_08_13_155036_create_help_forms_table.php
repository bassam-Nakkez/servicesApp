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
        Schema::create('help_forms', function (Blueprint $table) {
            $table->id();
            $table->string('fkSoc');
            $table->string('subject')->nullable();
            $table->string('message')->nullable();
            $table->string('typeCode')->nullable();
            $table->string('categoryCode')->nullable();
            $table->string('severityCode')->nullable();
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
