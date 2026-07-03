<?php

namespace Database\Factories;

use App\Models\Tea;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tea>
 */
class TeaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->words(3, true);
        return [
            'name' => $name,
            'image_path' => 'images/'.$name .'.jpg',
            'price' => $this->faker->randomFloat(2, 5, 20),
            'specification' => $this->faker->sentence(),

            'stock' => $this->faker->numberBetween(0, 100),
            'discount' => $this->faker->numberBetween(0, 30),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
