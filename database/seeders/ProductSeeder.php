<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'price' => 155000,
                'name' => 'Cây xương rồng nhảy múa - Đồ chơi trẻ em nhại giọng vui nhộn,đáng yêu phát nhạc 120 bài hát cài đặt sẵn',
                'created_at' => Carbon::now()->addDay(-3),
                'updated_at' => Carbon::now()->addDay(-3)
            ],
            [
                'id' => 2,
                'price' => 6500,
                'name' => 'Đồ chơi ghép hình 9 mảnh size 11*11cm giúp phát triển trí tuệ cho bé 2 3 4 tuổi, đồ chơi trẻ em thông minh dochoigo.vn',
                'created_at' => Carbon::now()->addDay(-4),
                'updated_at' => Carbon::now()->addDay(-4)
            ],
            [
                'id' => 3,
                'price' => 71500,
                'name' => 'Đồ chơi trẻ em , Bộ Đồ Chơi đàn phát nhạc cho bé Giúp bé cảm nhận âm thanh tốt cho sự pát triển của trí não, thính giác.',
                'created_at' => Carbon::now()->addDay(-8),
                'updated_at' => Carbon::now()->addDay(-8)
            ],
            [
                'id' => 4,
                'price' => 99000,
                'name' => 'Máy tính xách tay học tập đồ chơi vui nhộn dành cho trẻ em',
                'created_at' => Carbon::now()->addMonth(-1),
                'updated_at' => Carbon::now()->addMonth(-1)
            ],
            [
                'id' => 5,
                'price' => 90000,
                'name' => 'Đồ chơi DOMINO xếp hình thông minh cho trẻ em - Đồ chơi giáo dục trí tuệ 120 thanh cho bé trai gái',
                'created_at' => Carbon::now()->addMonth(-2),
                'updated_at' => Carbon::now()->addMonth(-2)
            ],
            [
                'id' => 6,
                'price' => 15900,
                'name' => 'Giáo cụ dạy học, đồ chơi trẻ em: Búa hơi nhiều màu - KKstore',
                'created_at' => Carbon::now()->addDay(-15),
                'updated_at' => Carbon::now()->addDay(-15)
            ],
            [
                'id' => 7,
                'price' => 155000,
                'name' => 'Cây xương rồng nhảy múa - Đồ chơi trẻ em nhại giọng vui nhộn,đáng yêu phát nhạc 120 bài hát cài đặt sẵn',
                'created_at' => Carbon::now()->addDay(-25),
                'updated_at' => Carbon::now()->addDay(-25)
            ],
            [
                'id' => 8,
                'price' => 450000,
                'name' => 'Đồ chơi bóng rổ trẻ em có thể nâng lên hạ xuống cho bé từ 1 đến 6 tuổi',
                'created_at' => Carbon::now()->addDay(-6),
                'updated_at' => Carbon::now()->addDay(-6)
            ],
            [
                'id' => 9,
                'price' => 199000,
                'name' => 'Xe Cẩu Chòi Chân Cho Bé Yêu Giá Rẻ. Máy Múc Đồ Chơi Cho Trẻ Em - CC1388',
                'created_at' => Carbon::now()->addDay(-2),
                'updated_at' => Carbon::now()->addDay(-2)
            ],
            [
                'id' => 10,
                'price' => 999000,
                'name' => 'Xe ô tô trẻ em Fey 5189 có điều khiển từ xa',
                'created_at' => Carbon::now()->addDay(-7),
                'updated_at' => Carbon::now()->addDay(-7)
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
