<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarStock>
 */
class CarStockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_id' => $this->faker->numberBetween(1, 4999),
            'price' => $this->faker->randomFloat(2, 10000, 50000),
            'old_price' => $this->faker->randomFloat(2, 8000, 45000),
            'no_passengers' => rand(1, 6),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['new', 'used', 'zero']),
            'mileage' => $this->faker->numberBetween(1000, 100000),
            'fuel_type' => $this->faker->randomElement(['gasoline', 'diesel', 'electric']),
            'gearbox' => $this->faker->randomElement(['automatic', 'manual']),
        ];
    }
}
