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
            $table->integer('number')->unique()->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('location')->nullable();
            $table->string('payment_reference_id')->nullable();
            $table->enum('payment_method', ['cod', 'skypay'])->nullable();
            $table->enum('payment_status',['Pending','Completed','Cancelled', 'Failed'])->default("Pending");
            $table->enum('order_status',['Pending','Processing','Problem','Pickup Available','Delivered','Cancelled'])->default("Pending");
            $table->double('subtotal')->default(0);
            $table->double('total')->default(0);
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
