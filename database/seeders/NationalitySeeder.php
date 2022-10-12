<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(
            static fn ($nationality) => Nationality::factory()->create(['name' => $nationality]),
            ['British', 'French', 'German', 'Russian', 'Spanish']
        );
    }
}
