<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'apartmentName' => 'A01',
                'address' => 'Hà Nội',
                'price' => 3000000,
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'thumbnail' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fgotecland.vn',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 1,
                'apartmentName' => 'A02',
                'address' => 'Hải Dương',
                'price' => 6000000,
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'thumbnail' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'status' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 1,
                'apartmentName' => 'A02',
                'address' => 'Hải Phòng',
                'price' => 2000000,
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'thumbnail' => 'https://thongtinbds24h.com/wp-content/uploads/2017/07/Chung-cu-Sunshine-City-02.jpg',
                'status' => 2,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ],
            [
                'id' => 1,
                'apartmentName' => 'A02',
                'address' => 'Quảng Ninh',
                'price' => 6000000,
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'thumbnail' => 'https://gotecland.vn/wp-content/uploads/2019/04/phoi-canh-eurowindow-river-park-canh-xe-chieu.jpg',
                'status' => 2,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1),
            ]
        ]);
    }
}
