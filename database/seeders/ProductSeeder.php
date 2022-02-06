<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Oppo Mobile',
                'price' => '20,000',
                'category' => 'mobile',
                'gallery' => 'https://5.imimg.com/data5/SELLER/Default/2021/1/HK/LE/LL/1073409/oppo-mobile-a9-2020-500x500.jpg',
                'description' => 'smartphone oppo with 8gb ram and more features.',
            ],
            [
                'name' => 'SAMSUNG TV',
                'price' => '25,000',
                'category' => 'tv',
                'gallery' => 'https://m.media-amazon.com/images/I/91o08DsRplL._AC_SL1500_.jpg',
                'description' => 'See all your favorite entertainment as it was meant to be seen with the Samsung UN55RU7300FXZA Curved 55-Inch 4K UHD 7 Series Ultra HD Smart TV. ...',
            ],
            [
                'name' => 'LG TV',
                'price' => '22,000',
                'category' => 'tv',
                'gallery' => 'https://www.lg.com/us/images/tvs/md06098476/gallery/desktop-01.jpg',
                'description' => 'Since the evolution of the TV, man has been fascinated by the device. After CRT TV’s Thin tubes are ruling the market today. This LG UN73 70 (177.8cm) ',
            ],
            [
                'name' => 'Panasonic Fridge',
                'price' => '15,000',
                'category' => 'fridge',
                'gallery' => 'https://khoslaonline.com/wp-content/uploads/2021/01/7193eukdSOL._SL1500_.jpg',
                'description' => 'Panasonic 551 Litre Side by Side Refrigerator (NR-CY550QKXZ) vs Panasonic 551 Litre Side by Side Refrigerator (NR-CY550GKXZ)',
            ],
            [
                'name' => 'LG Fridge',
                'price' => '17,000',
                'category' => 'fridge',
                'gallery' => 'https://5.imimg.com/data5/BP/GS/HS/SELLER-53232084/lg-refrigerator-d191-ksow-195-ltr-500x500.jpg',
                'description' => '4 Star LG Fridge Single Door',
            ]
        ]);
    }
}
