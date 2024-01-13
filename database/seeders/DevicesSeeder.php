<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('devices')->insert(['devices' => 'AC']);
        DB::table('devices')->insert(['devices' => 'Kulkas']);
        DB::table('devices')->insert(['devices' => 'Freezer']);
    }
}
