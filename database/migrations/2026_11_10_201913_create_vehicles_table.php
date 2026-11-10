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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plate_number', 15)->unique()->nullable(false);
            $table->string('brand', 50)->nullable(false);
            $table->string('model', 80)->nullable(false);
            $table->string('vehicle_type', 50)->nullable(false);
            $table->string('color', 30)->nullable(false);
            $table->integer('capacity')->nullable(false);
            $table->decimal('daily_rate', 10, 2)->nullable(false);
            $table->string('status', 30)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
