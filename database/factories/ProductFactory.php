<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'name' => $this->faker->word,
                'brand_id' => $this->faker->numberBetween(1, 2),
                'weight' => $this->faker->randomFloat(2, 0.1, 100),
                'dimensions' => $this->faker->randomNumber(2) . 'x' . $this->faker->randomNumber(2) . 'x' . $this->faker->randomNumber(2),
                'category_id' => $this->faker->numberBetween(1, 1),
                'description' => $this->faker->sentence,
                'quantity_available' => $this->faker->numberBetween(0, 100),
                'image' => $this->faker->imageUrl(),
                'price' => $this->faker->randomFloat(2, 10, 1000),
                'rate' => $this->faker->randomFloat(1, 1, 5),
            ];
    }
}
