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
        Schema::create('users', function (Blueprint $table) {
            $table->id('userID');
            $table->string('firstName', 25);
            $table->string('lastName',25);
            $table->string('email', 60 )->unique();
         // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('gender',['male','fmale']);
            $table->date('birth')->nullable();
            $table->integer('status')->nullable();
            $table->string('civility_code')->nullable();
            $table->string('personal_email')->nullable();
            $table->string('address')->nullable();
            $table->integer('zip')->nullable();
            $table->string('town')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('office_phone')->nullable()->main(7)->max(10);
            $table->integer('office_fax')->nullable()->main(7)->max(10);
            $table->integer('user_mobile')->nullable()->main(7)->max(10);
            $table->integer('personal_mobile')->nullable()->main(7)->max(10);
            $table->string('login');
            $table->string('datec')->nullable();
            $table->string('datem')->nullable();
            $table->string('socid')->nullable();
            $table->string('user')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('country_code')->nullable();
            $table->integer('phone')->nullable()->main(7)->max(10);
            $table->string('type')->nullable();
            $table->integer('fk_user')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
