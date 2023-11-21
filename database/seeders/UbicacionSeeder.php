<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ubicacion')->insert([
            [
            'ubicacion_id' => 1,
            'province_id' => 2,
            'city_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'ubicacion_id' => 2,
            'province_id' => 6,
            'city_id' => 83,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'ubicacion_id' => 3,
            'province_id' => 10,
            'city_id' => '2504',
            'created_at' => now(),
            'updated_at' => now(),],
            [
            'ubicacion_id' => 4,    
            'province_id' => 14,
            'city_id' => '2986',
            'created_at' => now(),
            'updated_at' => now(),],
            [
            'ubicacion_id' => 5,
            'province_id' => 22,
            'city_id' => '5003',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'ubicacion_id' => 6,
            'province_id' => 26,
            'city_id' => '5815',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'ubicacion_id' => 7,
            'province_id' => 18, 
            'city_id' => '4412',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'ubicacion_id' => 8,
            'province_id' => 30, 
            'city_id' => '6084',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'ubicacion_id' => 9,
            'province_id' => 34, 
            'city_id' => '7001',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'ubicacion_id' => 10,
            'province_id' => 38,
            'city_id' => '7208',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        ]);
    }
}
