<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\CarPhotoController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/cars/{id}', [CarController::class, 'show'])->name('car');

Auth::routes(['verify' => true]);

Route::middleware(['admin'])->group(function () {

    Route::get('/CriarAnuncio', [CarController::class, 'ShowForm'])->name('Anuncio1');
    Route::post('/SecurityAndPerfomance', [CarController::class, 'SecurityAndPerfomance'])->name('Anuncio2');
    Route::post('/InteriorEquipment', [CarController::class, 'InteriorEquipment'])->name('Anuncio3');
    Route::post('/ExteriorEquipment', [CarController::class, 'ExteriorEquipment'])->name('Anuncio4');
    Route::post('/ConfortAndMultimedia', [CarController::class, 'ConfortAndMultimedia'])->name('Anuncio5');
    Route::post('/StoreCar', [CarController::class, 'StoreCar'])->name('StoreCar');
    Route::post('/UploadPhotos', [CarController::class, 'UploadPhotos'])->name('UploadPhotos');
    
    Route::post('cars/{car}/photos/upload', [CarPhotoController::class, 'upload'])->name('car.photos.upload');
    Route::delete('/cars/{carId}/photos/{photoId}', [CarPhotoController::class, 'delete'])->name('car.photos.delete');

    Route::get('/Dashboard', [Dashboard::class, 'index'])->name('DashboardIndex');
    
    Route::get('/cars/{id}/edit', [Dashboard::class, 'edit'])->name('cars.edit');
    Route::post('/cars/{id}/edit2', [Dashboard::class, 'SecurityAndPerfomance'])->name('cars.edit2');
    Route::post('/cars/{id}/edit3', [Dashboard::class, 'InteriorEquipment'])->name('cars.edit3');
    Route::post('/cars/{id}/edit4', [Dashboard::class, 'ExteriorEquipment'])->name('cars.edit4');
    Route::post('/cars/{id}/edit5', [Dashboard::class, 'ConfortAndMultimedia'])->name('cars.edit5');
    Route::post('/cars/{id}/update', [Dashboard::class, 'update'])->name('cars.update');


    Route::get('/cars/{id}/edit/photos', [Dashboard::class, 'editPhotos'])->name('cars.editPhotos');

    Route::post('/cars/bulk-delete', [Dashboard::class, 'bulkDelete'])->name('cars.bulkDelete');

});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search/suggest', [SearchController::class, 'suggest'])->name('search.suggest');



Route::get('/searchproducts',[Search::class, 'searchpage'])->name('searchproducts');
Route::get('/showproducts/{product}', [ProductController::class,'show'])->name('products.show');
Route::put('/showproducts/category/{category}', [ProductController::class,'showcategory'])->name('productscategory.show');

