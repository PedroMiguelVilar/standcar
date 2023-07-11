<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $fuelType = $faker->randomElement(['Gasolina', 'Diesel', 'Gasóleo']);
    
        for ($i = 1; $i <= 10; $i++) {
            Car::create([
                'brand' => $faker->word,
                'model' => $faker->word,
                'year' => $faker->numberBetween(2000, 2023),
                'price' => $faker->numberBetween(50000, 100000),
                'matricula' => $faker->regexify('[A-Z]{2}-[0-9]{2}-[A-Z]{2}'),
                'mileage' => $faker->numberBetween(50000, 100000),
                'fuelType' => $fuelType,
            ]);
        }
    }
    
    

}
