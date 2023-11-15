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
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->string('shipping_address');
            $table->string('shipping_method')->nullable();
            $table->string('tracking_number', 8);
            $table->decimal('total_price', 10, 2);
            $table->decimal('shipping_fee', 10, 2);
            $table->boolean('is_done')->default(false);
            $table->date('delivered_on')->nullable();
            $table->boolean('transaction_status')->default(0)->nullable();
            $table->softDeletes();
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
