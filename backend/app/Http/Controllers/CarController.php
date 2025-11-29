<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\Maker;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'search']);
    }

    public function index()
    {
        $cars = Car::where('published', true)
            ->with(['maker', 'carModel', 'carType', 'fuelType', 'state', 'city', 'images'])
            ->latest()
            ->paginate(15);

        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::with(['user', 'maker', 'carModel', 'carType', 'fuelType', 'state', 'city', 'images'])
            ->findOrFail($id);

        $inWatchlist = false;
        if (Auth::check()) {
            $inWatchlist = Auth::user()->watchlists()->where('car_id', $id)->exists();
        }

        return view('cars.view', compact('car', 'inWatchlist'));
    }

    public function search(Request $request)
    {
        $query = Car::where('published', true)
            ->with(['maker', 'carModel', 'carType', 'fuelType', 'state', 'city', 'images']);

        if ($request->filled('maker_id')) {
            $query->where('maker_id', $request->maker_id);
        }

        if ($request->filled('model_id')) {
            $query->where('car_model_id', $request->model_id);
        }

        if ($request->filled('car_type_id')) {
            $query->where('car_type_id', $request->car_type_id);
        }

        if ($request->filled('fuel_type_id')) {
            $query->where('fuel_type_id', $request->fuel_type_id);
        }

        if ($request->filled('state_id')) {
            $query->where('state_id', $request->state_id);
        }

        if ($request->filled('city_id')) {
            $query->where('city_id', $request->city_id);
        }

        if ($request->filled('year_from')) {
            $query->where('year', '>=', $request->year_from);
        }

        if ($request->filled('year_to')) {
            $query->where('year', '<=', $request->year_to);
        }

        if ($request->filled('price_from')) {
            $query->where('price', '>=', $request->price_from);
        }

        if ($request->filled('price_to')) {
            $query->where('price', '<=', $request->price_to);
        }

        $sort = $request->get('sort', '');
        if ($sort === 'price') {
            $query->orderBy('price', 'asc');
        } elseif ($sort === '-price') {
            $query->orderBy('price', 'desc');
        } else {
            $query->latest();
        }

        $cars = $query->paginate(15);

        $makers = Maker::all();
        $carTypes = CarType::all();
        $fuelTypes = FuelType::all();
        $states = State::all();

        return view('cars.search', compact('cars', 'makers', 'carTypes', 'fuelTypes', 'states'));
    }

    public function create()
    {
        $makers = Maker::all();
        $carTypes = CarType::all();
        $fuelTypes = FuelType::all();
        $states = State::all();
        $cities = City::all();

        return view('cars.add_new', compact('makers', 'carTypes', 'fuelTypes', 'states', 'cities'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'maker_id' => 'required|exists:makers,id',
            'car_model_id' => 'required|exists:car_models,id',
            'car_type_id' => 'required|exists:car_types,id',
            'fuel_type_id' => 'required|exists:fuel_types,id',
            'state_id' => 'nullable|exists:states,id',
            'city_id' => 'nullable|exists:cities,id',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'price' => 'required|numeric|min:0',
            'mileage' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'images' => 'nullable|array',
            'images.*' => 'image|max:5120',
            'published' => 'boolean',
        ]);

        $validated['user_id'] = Auth::id();

        $car = Car::create($validated);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('car_images', 'public');
                CarImage::create([
                    'car_id' => $car->id,
                    'image_path' => $path,
                    'position' => $index,
                ]);
            }
        }

        return redirect()->route('cars.my-cars')->with('success', 'Car added successfully!');
    }

    public function edit($id)
    {
        $car = Car::where('user_id', Auth::id())->findOrFail($id);
        $makers = Maker::all();
        $carTypes = CarType::all();
        $fuelTypes = FuelType::all();
        $states = State::all();
        $cities = City::where('state_id', $car->state_id)->get();

        return view('cars.edit', compact('car', 'makers', 'carTypes', 'fuelTypes', 'states', 'cities'));
    }

    public function update(Request $request, $id)
    {
        $car = Car::where('user_id', Auth::id())->findOrFail($id);

        $validated = $request->validate([
            'maker_id' => 'required|exists:makers,id',
            'car_model_id' => 'required|exists:car_models,id',
            'car_type_id' => 'required|exists:car_types,id',
            'fuel_type_id' => 'required|exists:fuel_types,id',
            'state_id' => 'nullable|exists:states,id',
            'city_id' => 'nullable|exists:cities,id',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'price' => 'required|numeric|min:0',
            'mileage' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'images' => 'nullable|array',
            'images.*' => 'image|max:5120',
            'published' => 'boolean',
        ]);

        $car->update($validated);

        if ($request->hasFile('images')) {
            $existingCount = $car->images()->count();
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('car_images', 'public');
                CarImage::create([
                    'car_id' => $car->id,
                    'image_path' => $path,
                    'position' => $existingCount + $index,
                ]);
            }
        }

        return redirect()->route('cars.my-cars')->with('success', 'Car updated successfully!');
    }

    public function destroy($id)
    {
        $car = Car::where('user_id', Auth::id())->findOrFail($id);
        
        foreach ($car->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }
        
        $car->delete();

        return redirect()->route('cars.my-cars')->with('success', 'Car deleted successfully!');
    }

    public function myCars()
    {
        $cars = Car::where('user_id', Auth::id())
            ->with(['maker', 'carModel', 'carType', 'images'])
            ->latest()
            ->paginate(15);

        return view('cars.my_cars', compact('cars'));
    }
}
