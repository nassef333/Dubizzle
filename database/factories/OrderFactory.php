<?php

namespace Database\Factories;

use App\Models\Order;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
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
            'status' => $faker->randomElement(['Pending', 'Processing', 'Shipped']),
            'shipping_address' => $faker->address,
            'location_cdn' => $faker->city,
            'shipping_method' => $faker->randomElement(['Standard', 'Express']),
            'customer_phone' => $faker->phoneNumber,
            'tracking_number' => $faker->unique()->randomNumber(8),
            'transaction_status' => $faker->boolean(),
            'total_price' => $faker->randomFloat(2, 10, 500),
            'customer_name' => $faker->name,
            'customer_email' => $faker->email,
            'shipping_fee' => $faker->randomFloat(2, 5, 20),
            'area_id' => $faker->numberBetween(1, 10),
            'delivered_on' => $faker->optional()->date(),
            'is_done' => $faker->boolean(),   
        ];
    }
}
