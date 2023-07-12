<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car; // Replace with your model name
use App\Models\CarPhoto; // Replace with your model name

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $yearMin = $request->input('yearMin');
        $yearMax = $request->input('yearMax');
        $mileageMin = $request->input('mileageMin');
        $mileageMax = $request->input('mileageMax');
        $PriceMin = $request->input('PriceMin');
        $PriceMax = $request->input('PriceMax');

        // Start with the base query
        $results = Car::where('brand', 'ILIKE', "%{$query}%");

        // Check if brand results are empty, then search by model
        if ($results->count() === 0) {
            $results = Car::where('model', 'ILIKE', "%{$query}%");
        }

        // Add conditions for additional parameters if they are provided
        if ($yearMin && $yearMax) {
            $results = $results->whereBetween('year', [$yearMin, $yearMax]);
        } else if ($yearMin) {
            $results = $results->where('year', '>=', $yearMin);
        } else if ($yearMax) {
            $results = $results->where('year', '<=', $yearMax);
        }

        if ($mileageMin && $mileageMax) {
            $results = $results->whereBetween('mileage', [$mileageMin, $mileageMax]);
        } else if ($mileageMin) {
            $results = $results->where('mileage', '>=', $mileageMin);
        } else if ($mileageMax) {
            $results = $results->where('mileage', '<=', $mileageMax);
        }

        if ($PriceMin && $PriceMax) {
            $results = $results->whereBetween('price', [$PriceMin, $PriceMax]);
        } else if ($PriceMin) {
            $results = $results->where('price', '>=', $PriceMin);
        } else if ($PriceMax) {
            $results = $results->where('price', '<=', $PriceMax);
        }

        // Retrieve the search results
        $results = $results->get();

        // Create an empty array to store car IDs
        $carIds = [];

        foreach ($results as $car) {
            $carIds[] = $car->id;
        }

        // Retrieve all photos associated with the cars
        $car_photos = CarPhoto::whereIn('car_id', $carIds)->get();

        return view('search_results', ['results' => $results, 'car_photos' => $car_photos]);

    }



    public function suggest(Request $request)
    {
        $query = $request->input('query');
        $suggestedTerms = Car::where('brand', 'LIKE', "%{$query}%")
            ->limit(5) // Limit the number of suggested terms
            ->pluck('brand'); // Replace 'column_name' with the actual column to suggest from

        return response()->json($suggestedTerms);
    }
}
