<?php

use App\Enums\Vehicle\VehicleType;
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
        Schema::create('spots', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->boolean('vehicle_type')->default(VehicleType::Scooter->value)->comment(VehicleType::Scooter->value.' => Scooter, '.VehicleType::Car->value.' => Car');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spots');
    }
};