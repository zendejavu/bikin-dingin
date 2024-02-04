<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Arsan Kumala Jaya',
            'email' => 'arsanptik05@gmail.com',
            'role' => 'admin',
            'phone' => '082291610212',
            'address' => '',
            'zip' => '',
            'password' => Hash::make('admin')
        ]);

        User::factory()->create([
            'name' => 'Ali Ahmad',
            'email' => 'ali@gmail.com',
            'role' => 'customer',
            'phone' => '082291610212',
            'address' => '',
            'zip' => '',
            'password' => Hash::make('admin')
        ]);

        User::factory(10)->create();

        $this->call([
            DevicesSeeder::class,
            ProblemsSeeder::class,
            OrderSeeder::class
        ]);
    }
}
