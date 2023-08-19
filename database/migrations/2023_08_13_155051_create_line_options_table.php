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
        Schema::create('line_options', function (Blueprint $table) {
            $table->id('lineOptionID');
            $table->unsignedBigInteger('lineID');
            $table->foreign('lineID')->references('lineID')->on('lines');
            $table->string('options_fk_fichinter')->nullable();
            $table->string('options_efficacite')->nullable();
            $table->string('options_ponctualite')->nullable();
            $table->string('options_presentation')->nullable();
            $table->string('options_avisgeneral')->nullable();
            $table->string('options_iseval')->nullable();
            $table->string('options_idtasks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('line_options');
    }
};
