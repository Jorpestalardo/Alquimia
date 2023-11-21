<?php

namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('province')->insert([
            [
                'province_id' => 2,
                'cod' => 'CABA',
                'name' => 'CIUDAD AUTÓNOMA DE BUENOS AIRES',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 6,
                'cod' => 'BA',
                'name' => 'BUENOS AIRES',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 10,
                'cod' => 'CT',
                'name' => 'CATAMARCA',
                'created_at' => now(),
                'updated_at' => now(),],
                [
                'province_id' => 14,
                'cod' => 'CBA',
                'name' => 'CÓRDOBA',
                'created_at' => now(),
                'updated_at' => now(),],
                [
                'province_id' => 22,
                'cod' => 'CC',
                'name' => 'CHACO',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 26,
                'cod' => 'CH',
                'name' => 'CHUBUT',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 18, 
                'cod' => 'CR',
                'name' => 'CORRIENTES',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 30, 
                'cod' => 'ER',
                'name' => 'ENTRE RÍOS',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 34, 
                'cod' => 'FO',
                'name' => 'FORMOSA',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 38,
                'cod' => 'JY',
                'name' => 'JUJUY',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 42,
                'cod' => 'LP',
                'name' => 'LA PAMPA',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 46,
                'cod' => 'LR',
                'name' => 'LA RIOJA', 'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 50,
                'cod' => 'MZ',
                'name' => 'MENDOZA',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 54,
                'cod' => 'MN',
                'name' => 'MISIONES',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 58,
                'cod' => 'NQ',
                'name' => 'NEUQUÉN', 'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 62,
                'cod' => 'RN',
                'name' => 'RÍO NEGRO',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [  
                'province_id' => 66,
                'cod' => 'SA',
                'name' => 'SALTA',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 70,
                'cod' => 'SJ',
                'name' => 'SAN JUAN',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 74,
                'cod' => 'SL',
                'name' => 'SAN LUIS',
                'created_at' => now(),
                'updated_at' => now(),],
                [
                'province_id' => 78,
                'cod' => 'SC',
                'name' => 'SANTA CRUZ',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                ['province_id' => 82,
                'cod' => 'SF',
                'name' => 'SANTA FE',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 86,
                'cod' => 'SE',
                'name' => 'SANTIAGO DEL ESTERO', 'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 90,
                'cod' => 'TM',
                'name' => 'TUCUMÁN',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [
                'province_id' => 94,
                'cod' => 'TF',
                'name' => 'TIERRA DEL FUEGO',
                'created_at' => now(),
                'updated_at' => now(),
                ],
        ]);
    }
}
