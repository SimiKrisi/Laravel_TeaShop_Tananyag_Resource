<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tea;

class TeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        //több tea hozzáadása a teák táblához
        Tea::insert([
            [
                'name' => 'Black Tea',
                'image_path' => 'images/black_tea.jpg',
                'price' => 12.99,
                'specification' => 'Premium black tea leaves.',
                'stock' => 50,
                'discount' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Herbal Tea',
                'image_path' => 'images/herbal_tea.jpg',
                'price' => 8.99,
                'specification' => 'A blend of herbal ingredients.',
                'stock' => 75,
                'discount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Oolong Tea',
                'image_path' => 'images/oolong_tea.jpg',
                'price' => 15.99,
                'specification' => 'Traditional oolong tea leaves.',
                'stock' => 30,
                'discount' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Tea::factory()->count(20)->create();

    }
}
