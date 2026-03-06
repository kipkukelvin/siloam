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
        Schema::create('applications', function (Blueprint $table) {
             $table->id();
             $table->string('name');
             $table->string('email');
             $table->string('phone');
             $table->string('course');
             $table->string('education_level')->nullable();
             $table->string('kcse_grade')->nullable();
             $table->string('status')->default('Pending');
             $table->timestamps();
             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
