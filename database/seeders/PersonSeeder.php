<?php

namespace Database\Seeders;

use App\Models\Nationality;
use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nats = Nationality::all()->toArray();

        foreach (range(1, 20) as $_) {
            Person::factory()
                ->create()
                ->nationalities()->attach(
                    array_map(
                        fn ($n) => $nats[$n]['id'],
                        (array) array_rand($nats, rand(1, count($nats)))
                    )
                );
        }
    }
}
