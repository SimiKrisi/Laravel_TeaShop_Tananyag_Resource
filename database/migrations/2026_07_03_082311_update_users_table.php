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
        // Add new columns to the users table
        Schema::table('users', function (Blueprint $table) {
            $table->json('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->json('cart_data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['address', 'phone_number', 'is_admin', 'cart_data']);
        });
    }
};
