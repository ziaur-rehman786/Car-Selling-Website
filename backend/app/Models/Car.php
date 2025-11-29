<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    protected $fillable = [
        'user_id', 'maker_id', 'car_model_id', 'car_type_id', 'fuel_type_id',
        'state_id', 'city_id', 'year', 'price', 'mileage', 'description',
        'air_conditioning', 'power_windows', 'power_door_locks', 'abs',
        'cruise_control', 'bluetooth_connectivity', 'remote_start',
        'gps_navigation', 'heated_seats', 'climate_control',
        'rear_parking_sensors', 'leather_seats', 'phone', 'published'
    ];

    protected $casts = [
        'air_conditioning' => 'boolean',
        'power_windows' => 'boolean',
        'power_door_locks' => 'boolean',
        'abs' => 'boolean',
        'cruise_control' => 'boolean',
        'bluetooth_connectivity' => 'boolean',
        'remote_start' => 'boolean',
        'gps_navigation' => 'boolean',
        'heated_seats' => 'boolean',
        'climate_control' => 'boolean',
        'rear_parking_sensors' => 'boolean',
        'leather_seats' => 'boolean',
        'published' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }

    public function carModel(): BelongsTo
    {
        return $this->belongsTo(CarModel::class);
    }

    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }

    public function fuelType(): BelongsTo
    {
        return $this->belongsTo(FuelType::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class)->orderBy('position');
    }

    public function watchlists(): HasMany
    {
        return $this->hasMany(Watchlist::class);
    }
}

