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
            $table->foreign('lineID')->references('productID')->on('lines');
            $table->string('options_fk_fichinter');
            $table->string('options_efficacite');
            $table->string('options_ponctualite');
            $table->string('options_presentation');
            $table->string('options_avisgeneral');
            $table->string('options_iseval');
            $table->string('options_idtasks');
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
