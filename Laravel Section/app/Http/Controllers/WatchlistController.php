<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Auth::user()
            ->watchlists()
            ->with(['car.maker', 'car.carModel', 'car.carType', 'car.fuelType', 'car.state', 'car.images'])
            ->get()
            ->pluck('car')
            ->filter()
            ->paginate(15);

        return view('cars.watchlist', compact('cars'));
    }

    public function toggle($carId)
    {
        $watchlist = Watchlist::where('user_id', Auth::id())
            ->where('car_id', $carId)
            ->first();

        if ($watchlist) {
            $watchlist->delete();
            return response()->json(['status' => 'removed', 'message' => 'Removed from watchlist']);
        } else {
            Watchlist::create([
                'user_id' => Auth::id(),
                'car_id' => $carId,
            ]);
            return response()->json(['status' => 'added', 'message' => 'Added to watchlist']);
        }
    }
}

