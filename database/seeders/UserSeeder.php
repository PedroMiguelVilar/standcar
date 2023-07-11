<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            $role = $faker->randomElement(['user', 'admin']);

            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => $faker->password(),
                'role' => $role,
            ]);
        }
    }
}
