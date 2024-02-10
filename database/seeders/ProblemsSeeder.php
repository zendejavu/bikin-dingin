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
            'device_id' => '1',
            'problem' => 'Saluran drain tersumbat atau bocor',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Ganti capacitor',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Ganti fan motor indoor',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Ganti fan motor outdoor',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Ganti sensor suhu',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Ganti filter',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Penambahan gas refrigerant',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Kerusakan kelistrikan',
            'service' => 'Ringan'
        ]);

        // AC : SERVIS BERAT
        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Kebocoran pipa refrigerant',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Ganti compressor',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Ganti modul control',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Ganti evaporator',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '1',
            'problem' => 'Ganti condensor',
            'service' => 'Berat'
        ]);

        // ====================================
        // KULKAS : SERVIS RINGAN 
        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Ganti lampu',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Ganti capacitor',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Ganti pengatur suhu',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Ganti sensor suhu',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Kerusakan kelistrikan',
            'service' => 'Ringan'
        ]);

        // KULKAS : SERVIS BERAT 
        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Ganti compressor',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Ganti evaporator',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Ganti condensor',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Kebocoran pipa refrigerant',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Ganti heater',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '2',
            'problem' => 'Saluran udara buntu(untuk kulkas 2 pintu atau lebih)',
            'service' => 'Berat'
        ]);

        // ====================================
        // FREEZER : SERVIS RINGAN 
        DB::table('problems')->insert([
            'device_id' => '3',
            'problem' => 'Kebocoran kecil insulasi',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '3',
            'problem' => 'Ganti sensor suhu',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '3',
            'problem' => 'Ganti pengatur suhu',
            'service' => 'Ringan'
        ]);

        DB::table('problems')->insert([
            'device_id' => '3',
            'problem' => 'Kerusakan kelistrikan',
            'service' => 'Ringan'
        ]);

        // FREEZER : SERVIS BERAT
        DB::table('problems')->insert([
            'device_id' => '3',
            'problem' => 'Kebocoran besar insulasi',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '3',
            'problem' => 'Ganti condensor',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '3',
            'problem' => 'Ganti evaporator',
            'service' => 'Berat'
        ]);

        DB::table('problems')->insert([
            'device_id' => '3',
            'problem' => 'Ganti compressor',
            'service' => 'Berat'
        ]);
    }
}
