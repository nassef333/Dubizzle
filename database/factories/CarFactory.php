<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'car_series_id' => $this->faker->numberBetween(1, 999),
            'class' => $this->faker->year(),
            'type' => $this->faker->randomElement(['sports', 'sedan', 'coupe', 'family']),
            'description' => $this->faker->sentence,
            'quantity_available' => $this->faker->numberBetween(1, 100),
        ];
    }
}
