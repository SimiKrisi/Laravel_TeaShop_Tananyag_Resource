<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 * // user_id	shipping_fee	total_amount	personal name	address	phone_number	comment	status

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
            'user_id' => $this->faker->numberBetween(1, 3),
            'shipping_fee' => $this->faker->randomFloat(2, 0, 19),
            'total_amount' => $this->faker->randomFloat(2, 20, 200),
            'personal_name' => $this->faker->name(),
            'address' => json_encode([
                'street' => $this->faker->streetAddress(),
                'city' => $this->faker->city(),
                'state' => $this->faker->state(),
                'zip' => $this->faker->postcode(),
            ]),
            'phone_number' => $this->faker->phoneNumber(),
            'comment' => $this->faker->optional()->sentence(),
            'status' => $this->faker->randomElement(['pending', 'processing', 'shipped', 'delivered', 'cancelled']),
        ];
    }
}
