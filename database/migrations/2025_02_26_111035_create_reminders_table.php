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
        Schema::create('reminders', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Title of the reminder
            $table->text('description')->nullable(); // Optional description
            $table->dateTime('reminder_date'); // Date and time for the reminder
            $table->boolean('is_completed')->default(false); // Whether the reminder is completed
            // Polymorphic relationship columns
            $table->unsignedBigInteger('reminderable_id'); // ID of the associated model
            $table->string('reminderable_type'); // Class name of the associated model
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key referencing users table
            $table->timestamps(); // Created at and updated at timestamps

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminders');
    }
};
