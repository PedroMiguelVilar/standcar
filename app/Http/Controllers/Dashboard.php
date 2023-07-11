<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarPhoto;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('admin.dashboard', [
            // Add other data for the results page as needed
            'cars' => $cars,
        ]);
    }

    public function edit($id)
    {
        // Retrieve the car record from the database using the $id parameter
        $car = Car::find($id);

        return view('admin.editaranuncio', [
            'car' => $car, // Pass the car data to the view
        ]);
    }

    public function SecurityAndPerfomance(Request $request, $id)
    {

        $car = Car::find($id);

        $mergedParams = $request->all();
        $mergedParams = serialize($mergedParams);


        return view('admin.editaranuncio2', [
            'mergedParams' => $mergedParams,
            'car' => $car,
            // Add other data for the results page as needed
        ]);
    }

    public function InteriorEquipment(Request $request, $id)
    {

        $car = Car::find($id);

        $mergedParams = $request->input('mergedParams');
        $mergedParams = unserialize($mergedParams);

        $param = $request->except('mergedParams');
        $param = array_merge($param, $mergedParams);
        $param = serialize($param);

        return view('admin.editaranuncio3', [
            'mergedParams' => $param,
            'car' => $car,
            // Add other data for the results page as needed
        ]);
    }

    public function ExteriorEquipment(Request $request, $id)
    {

        $car = Car::find($id);

        $mergedParams = $request->input('mergedParams');
        $mergedParams = unserialize($mergedParams);

        $param = $request->except('mergedParams');
        $param = array_merge($param, $mergedParams);
        $param = serialize($param);

        return view('admin.editaranuncio4', [
            'mergedParams' => $param,
            'car' => $car,
            // Add other data for the results page as needed
        ]);
    }



    public function ConfortAndMultimedia(Request $request, $id)
    {

        $car = Car::find($id);

        $mergedParams = $request->input('mergedParams');
        $mergedParams = unserialize($mergedParams);

        $param = $request->except('mergedParams');
        $param = array_merge($param, $mergedParams);
        $param = serialize($param);

        return view('admin.editaranuncio5', [
            'mergedParams' => $param,
            'car' => $car,
            // Add other data for the results page as needed
        ]);
    }

    public function update(Request $request, $id)
    {
        $mergedParams = $request->input('mergedParams');
        $mergedParams = unserialize($mergedParams);

        $param = $request->except('mergedParams');
        $param = array_merge($param, $mergedParams);

        // Retrieve the car record from the database using the $id parameter
        $car = Car::find($id);

        // Update the car record with the values from the $param dictionary
        $car->update($param);

        // Redirect to the appropriate page after the update
        return redirect()->route('car', ['id' => $car->id]);
    }
    public function editPhotos($id)
    {
        // Find the car by ID
        $car = Car::find($id);

        // Find all CarPhoto records with the same foreign key value as $id
        $carPhotos = CarPhoto::where('car_id', $id)->get();

        return view('admin.editaranuncio6', [
            'car' => $car,
            'carPhotos' => $carPhotos,
            // Add other data for the results page as needed
        ]);
    }



    public function bulkDelete(Request $request)
    {

        $selectedCars = $request->input('selected_cars_delete');


        // Perform bulk delete action based on the selected car IDs
        // Delete the cars from the database or perform any other desired action
        if (strlen($selectedCars) > 1) {
            $selectedCars = explode(",", $selectedCars);
        } else {
            $selectedCars = array($selectedCars);
        }

        foreach ($selectedCars as $carId) {
            if (is_numeric($carId)) {
                // Delete the associated photos first
                CarPhoto::where('car_id', $carId)->delete();

                // Delete the car with the given ID from the database
                Car::findOrFail($carId)->delete();
            }
        }


        // Redirect back to the dashboard or any other desired page
        return redirect()->route('DashboardIndex')->with('success', 'Delete completed successfully.');
    }
}
