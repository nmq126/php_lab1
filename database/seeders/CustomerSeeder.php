<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Chris Evans',
                'address' => '20 Giai Phong',
                'created_at' => Carbon::now()->addDay(-2),
                'updated_at' => Carbon::now()->addDay(-2)
            ],
            [
                'id' => 2,
                'name' => 'Robert Downey Jr.',
                'address' => '8A Ton That Thuyet',
                'created_at' => Carbon::now()->addDay(-6),
                'updated_at' => Carbon::now()->addDay(-5)
            ],
            [
                'id' => 3,
                'name' => 'Chris Hemsworth',
                'address' => '94 Tan Mai',
                'created_at' => Carbon::now()->addDay(-12),
                'updated_at' => Carbon::now()->addDay(-6)
            ],
            [
                'id' => 4,
                'name' => 'Tom Hiddleston',
                'address' => '72 Nguyen Trai',
                'created_at' => Carbon::now()->addDay(-15),
                'updated_at' => Carbon::now()->addDay(-15)
            ],
            [
                'id' => 5,
                'name' => 'Elizabeth Olsen',
                'address' => '458 Minh Khai',
                'created_at' => Carbon::now()->addDay(-10),
                'updated_at' => Carbon::now()->addDay(-10)
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
