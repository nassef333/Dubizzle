<?php

namespace Database\Factories;

namespace Database\Factories;

use App\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed']),
            'shipping_address' => $this->faker->address,
            'shipping_method' => $this->faker->randomElement(['standard', 'express']),
            'tracking_number' => $this->faker->ean8,
            'total_price' => $this->faker->randomFloat(2, 50, 1000),
            'shipping_fee' => $this->faker->randomFloat(2, 5, 50),
            'is_done' => $this->faker->boolean(80),
            'delivered_on' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'area_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
