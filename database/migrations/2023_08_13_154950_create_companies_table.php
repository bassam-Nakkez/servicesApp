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
        Schema::create('companies', function (Blueprint $table) {
            $table->id('companyID');
            $table->string('firstName', 25);
            $table->string('lastName',25);
            $table->string('email', 60 )->unique();
            $table->string('password');
            $table->integer('phone')->nullable()->main(7)->max(10);
            $table->string('login')->nullable();
            $table->string('default_rib')->nullable();
            $table->string('frstrecur')->nullable();
            $table->string('label')->nullable();
            $table->string('code_banque')->nullable();
            $table->string('code_guichet')->nullable();
            $table->integer('account_number')->nullable();
            $table->string('cle_rib')->nullable();
            $table->string('bank')->nullable();
            $table->string('bic')->nullable();
            $table->string('iban')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
