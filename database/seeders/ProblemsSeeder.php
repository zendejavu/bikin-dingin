<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Problems;
use Illuminate\Support\Facades\DB;

class ProblemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // AC : SERVIS RINGAN
        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Saluran drain tersumbat atau bocor',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Ganti capacitor',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Ganti fan motor indoor',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Ganti fan motor outdoor',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Ganti sensor suhu',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Ganti filter',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Penambahan gas refrigerant',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Kerusakan kelistrikan',
            'services' => 'Ringan'
        ]);

        // AC : SERVIS BERAT
        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Kebocoran pipa refrigerant',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Ganti compressor',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Ganti modul control',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Ganti evaporator',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '1',
            'problems' => 'Ganti condensor',
            'services' => 'Berat'
        ]);

        // ====================================
        // KULKAS : SERVIS RINGAN 
        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Ganti lampu',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Ganti capacitor',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Ganti pengatur suhu',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Ganti sensor suhu',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Kerusakan kelistrikan',
            'services' => 'Ringan'
        ]);

        // KULKAS : SERVIS BERAT 
        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Ganti compressor',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Ganti evaporator',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Ganti condensor',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Kebocoran pipa refrigerant',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Ganti heater',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '2',
            'problems' => 'Saluran udara buntu(untuk kulkas 2 pintu atau lebih)',
            'services' => 'Berat'
        ]);

        // ====================================
        // FREEZER : SERVIS RINGAN 
        DB::table('problems')->insert([
            'devices_id' => '3',
            'problems' => 'Kebocoran kecil insulasi',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '3',
            'problems' => 'Ganti sensor suhu',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '3',
            'problems' => 'Ganti pengatur suhu',
            'services' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '3',
            'problems' => 'Kerusakan kelistrikan',
            'services' => 'Ringan'
        ]);

        // FREEZER : SERVIS BERAT
        DB::table('problems')->insert([
            'devices_id' => '3',
            'problems' => 'Kebocoran besar insulasi',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '3',
            'problems' => 'Ganti condensor',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '3',
            'problems' => 'Ganti evaporator',
            'services' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'devices_id' => '3',
            'problems' => 'Ganti compressor',
            'services' => 'Berat'
        ]);
    }
}
