<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            'user_id' => 1,
            'device_id' => 1,
            'problem_id' => 1,
            'address' => 'Kampung Lette',
            'work_date' => '2024/01/12',
            'note' => 'AC sudah tidak dingin',
            'price' => 0,
        ]);
    }
}
