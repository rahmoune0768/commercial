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
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('fax')->nullable();
            $table->string('adress')->nullable();
            $table->string('wilaya')->nullable();
            $table->string('logo')->nullable();
            $table->foreignId('industry_id')->constrained()->onDelete('cascade');
            $table->foreignId('legal_statut_id')->constrained()->onDelete('cascade');
            $table->string('nif')->nullable()->unique();
            $table->string('rcommerce')->nullable()->unique();
            $table->enum('statut',['active','inactive'])->default('active');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
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
