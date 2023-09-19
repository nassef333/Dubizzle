<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $name = $this->faker->unique()->word();
       $uniqueName = $name . '_' . \Str::random(5);

       return [
           'name' => $uniqueName,
           'parent_id' => null,
       ];
    }
}
