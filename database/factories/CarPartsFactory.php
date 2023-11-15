<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarPart>
 */
class CarPartsFactory extends Factory
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
            'category_id' => $this->faker->numberBetween(1, 99),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'old_price' => $this->faker->randomFloat(2, 5, 400),
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['available', 'out_of_stock', 'pending']),
            'code' => $this->faker->ean13,
            'count' => $this->faker->numberBetween(1, 100),
            'warranty' => $this->faker->randomElement(['1 year', '2 years', '3 years']),
            'sale_price' => $this->faker->randomFloat(2, 5, 400),
            'sale_amount' => $this->faker->randomFloat(2, 1, 50),
        ];
    }
}
