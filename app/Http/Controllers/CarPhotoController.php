<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarPhoto;

class CarPhotoController extends Controller
{
    public function upload(Request $request, Car $car)
{
    $request->validate([
        'photo' => 'required|array',
        'photo.*' => 'image|max:2048', // Adjust the validation rules as per your needs
    ]);

    $photoPaths = [];
    foreach ($request->file('photo') as $photo) {
        $photoPath = $photo->store('public');
        $photo_clean = explode("/", $photoPath);
        $photoPath = '/storage/' . $photo_clean[1];
        $photoPaths[] = $photoPath;

        CarPhoto::create([
            'car_id' => $car->id,
            'photo_path' => $photoPath,
        ]);
    }

    // Retrieve all photos associated with the car
    $carPhotos = CarPhoto::where('car_id', $car->id)->get();

    return view('admin.criaranuncio6', [
        'car' => $car,
        'carPhotos' => $carPhotos,
        // Add other data for the results page as needed
    ]);
}

    public function delete($carId, $photoId)
    {


        // Find the photo by carId and photoId
        $photo = CarPhoto::where('car_id', $carId)->findOrFail($photoId);    
        
        // Delete the photo from the database
        $photo->delete();

        // Retrieve the car by carId
        $car = Car::findOrFail($carId);

        // Retrieve all photos associated with the car
        $carPhotos = CarPhoto::where('car_id', $car->id)->get();
    
        // You can also delete the actual photo file from storage if necessary
        // Storage::delete($photo->photo_path);
    
        // Redirect back or return a response indicating success
        return view('admin.criaranuncio6', [
            'car' => $car,
            'carPhotos' => $carPhotos,
            // Add other data for the results page as needed
        ]);
    }
    
    

    
}
