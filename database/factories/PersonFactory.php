<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->randomNumber(5, true),
            'title' => fake()->title,
            'first_name' => fake()->firstName,
            'surname' => fake()->lastName,
            'address' => fake()->address,
            'created_on' => fake()->dateTime
        ];
    }
}
