<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('maker_id')->constrained()->onDelete('cascade');
            $table->foreignId('car_model_id')->constrained('car_models')->onDelete('cascade');
            $table->foreignId('car_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('fuel_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('state_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('city_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('year');
            $table->decimal('price', 10, 2);
            $table->integer('mileage')->nullable();
            $table->text('description')->nullable();
            
            // Features
            $table->boolean('air_conditioning')->default(false);
            $table->boolean('power_windows')->default(false);
            $table->boolean('power_door_locks')->default(false);
            $table->boolean('abs')->default(false);
            $table->boolean('cruise_control')->default(false);
            $table->boolean('bluetooth_connectivity')->default(false);
            $table->boolean('remote_start')->default(false);
            $table->boolean('gps_navigation')->default(false);
            $table->boolean('heated_seats')->default(false);
            $table->boolean('climate_control')->default(false);
            $table->boolean('rear_parking_sensors')->default(false);
            $table->boolean('leather_seats')->default(false);
            
            $table->string('phone')->nullable();
            $table->boolean('published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};

