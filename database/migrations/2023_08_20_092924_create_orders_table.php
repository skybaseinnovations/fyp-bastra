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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('set null')->onUpdate('set null');
            $table->string('location')->nullable();
            $table->integer('payment_reference_id')->nullable();
            $table->enum('payment_status',['Pending','Accepted','Cancelled'])->default("Pending");
            $table->enum('order_status',['Pending','Delivering','Delivered','Cancelled'])->default("Pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};