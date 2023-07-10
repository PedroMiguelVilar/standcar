<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car; // Replace with your model name

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $yearMin = $request->input('yearMin');
        $yearMax = $request->input('yearMax');
        $mileageMin = $request->input('mileageMin');
        $mileageMax = $request->input('mileageMax');
        $priceMin = $request->input('priceMin');
        $priceMax = $request->input('priceMax');
    
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
    
        if ($priceMin && $priceMax) {
            $results = $results->whereBetween('price', [$priceMin, $priceMax]);
        } else if ($priceMin) {
            $results = $results->where('price', '>=', $priceMin);
        } else if ($priceMax) {
            $results = $results->where('price', '<=', $priceMax);
        }
    
        // Retrieve the search results
        $results = $results->get();
    
        return view('search_results', ['results' => $results]);
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
