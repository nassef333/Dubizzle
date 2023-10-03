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
        Schema::create('car_stock', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->decimal('price', 10, 2);
            $table->decimal('old_price', 10, 2);
            $table->unsignedTinyInteger('no_passengers');
            $table->enum('status', ['new', 'used', 'zero']); // new used zero
            $table->string('mileage')->nullable();
            $table->string('fuel_type');
            $table->string('gearbox');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_stock');
    }
};
