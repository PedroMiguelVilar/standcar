<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarPhoto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $cars = Car::all();
        $car_photos = CarPhoto::all();

        return view('home', [
            'cars' => $cars, // Pass the car data to the view
            'car_photos' => $car_photos,
        ]);
    }
}
