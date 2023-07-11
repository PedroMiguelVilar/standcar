<?php

namespace Database\Seeders;

use App\Models\CarPhoto;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CarPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            CarPhoto::create([
                'car_id' => $faker->numberBetween(1, 10), // Replace with the range of car IDs in your database
                'photo_path' => $faker->imageUrl(640, 480, 'cars'),
            ]);
        }
    }
}
