<?php
namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Maker;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\State;

class HomeController extends Controller
{
    public function index() {
        $cars = Car::where('published', true)
            ->with(['maker', 'carModel', 'carType', 'fuelType', 'state', 'city', 'images'])
            ->latest()
            ->take(15)
            ->get();

        $makers = Maker::all();
        $carTypes = CarType::all();
        $fuelTypes = FuelType::all();
        $states = State::all();

        return view('home.index', compact('cars', 'makers', 'carTypes', 'fuelTypes', 'states'));
    }
}
