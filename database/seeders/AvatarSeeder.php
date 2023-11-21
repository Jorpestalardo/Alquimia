<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('avatar')->insert([
            [
                'avatar_id' => 1,
                'avatar' => '1.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'avatar_id' => 2,
                'avatar' => '2.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'avatar_id' => 3,
                'avatar' => '3.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'avatar_id' => 4,
                'avatar' => '4.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'avatar_id' => 5,
                'avatar' => '5.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'avatar_id' => 6,
                'avatar' => '6.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
