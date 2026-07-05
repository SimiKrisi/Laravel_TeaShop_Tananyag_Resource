<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Order_item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => $this->faker->numberBetween(1, 5),
            'tea_id' => $this->faker->numberBetween(1, 23),
            'quantity' => $this->faker->numberBetween(1, 5),
            'fixed_price' => $this->faker->randomFloat(2, 5, 50),
        ];
    }
}
