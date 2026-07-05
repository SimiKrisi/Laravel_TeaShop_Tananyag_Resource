<?php

namespace Database\Seeders;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 'user_id',
        'shipping_fee',
        'total_amount',
        'personal_name',
        'address',
        'phone_number',
        'comment',
        'status'
     */
    public function run(): void
    {
        Order::factory()->create([
            'user_id' => 1,
            'shipping_fee' => 5.00,
            'total_amount' => 50.00,
            'personal_name' => 'John Doe',
            'address' => json_encode(['street' => '123 Main St', 'city' => 'Anytown', 'state' => 'CA', 'zip' => '12345']),
            'phone_number' => '123-456-7890',
            'comment' => 'Please deliver between 9 AM and 5 PM.',
            'status' => 'pending',
        ]);
        Order::factory()->count(5)->create();
    }
}
