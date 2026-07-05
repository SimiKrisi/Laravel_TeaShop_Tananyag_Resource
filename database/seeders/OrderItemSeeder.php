<?php

namespace Database\Seeders;
use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * order_id	tea_id	quantity	fixed_price
     */
    public function run(): void
    {
        OrderItem::factory()->count(10)->create();
    }
}
