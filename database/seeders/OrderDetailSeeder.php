<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('order_details')->truncate();
        \Illuminate\Support\Facades\DB::table('order_details')->insert([
            [
                'order_id' => 1,
                'product_id' => 3,
                'quantity' => 1,
                'unit_price' => 71500
            ],
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 10,
                'unit_price' => 6500
            ],
            [
                'order_id' => 1,
                'product_id' => 8,
                'quantity' => 1,
                'unit_price' => 450000
            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'quantity' => 14,
                'unit_price' => 6500
            ],
            [
                'order_id' => 2,
                'product_id' => 4,
                'quantity' => 2,
                'unit_price' => 99000
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
