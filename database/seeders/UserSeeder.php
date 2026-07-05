<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'address' => json_encode(['street' => '123 Main St', 'city' => 'Anytown', 'state' => 'CA', 'zip' => '12345'])   ,
            'phone_number' => '123-456-7890',
            'is_admin' => false,
            'cart_data' => null,
        ]);
        User::factory()->create([
            'name' => 'Test User2',
            'email' => 'test2@example.com',
            'password' => bcrypt('password'),
            'address' => json_encode(['street' => '456 Elm St', 'city' => 'Othertown', 'state' => 'NY', 'zip' => '67890'])   ,
            'phone_number' => '987-654-3210',
            'is_admin' => true,
            'cart_data' => null,
        ]);
        User::factory()->create([
            'name' => 'Test User3',
            'email' => 'test3@example.com',
            'password' => bcrypt('password'),
            'address' => json_encode(['street' => '5 Main St', 'city' => 'Anywhere', 'state' => 'HU', 'zip' => '43434'])   ,
            'phone_number' => '434-434-4343',
            'is_admin' => false,
            'cart_data' => null,
        ]);
    }
}
