<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecturer>
 */
class LecturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = faker::create();
        return [
            'nidn' => mt_rand(0000001, 9999999),
            'name' => $faker->name(),
            'course' => $faker->word(),
            'email' => $faker->email(),
            'phone' => $faker->phoneNumber(),
        ];
    }
}
