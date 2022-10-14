<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people =Person::all();

        $cars = [
            "Honda" => ["Civic", "CRV", "Jazz", "Accord"],
            "Toyota" => ["Prius", "Avensis", "Rav4"],
            "Ford" => ["Escort", "Mondeo", "Fiesta", "Focus"],
            "BMW" => ["320", "535", "M4", "Z3"]
        ];

        foreach (range(1, 20) as $_) {
            $make = array_rand($cars);

            Car::factory()->create([
                'make' => $make,
                'model' => $cars[$make][array_rand($cars[$make])],
                'person_id' => $people[rand(0, sizeof($people)-1)]->id
            ]);
        }
    }
}
