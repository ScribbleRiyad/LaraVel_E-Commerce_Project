<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name'=>'Oppo mobile',
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
            ],
            [
                'name'=>'Soni Tv',
                "price"=>"500",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name'=>'LG fridge',
                "price"=>"200",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
            ],
             [
                'name'=>'Keyboard',
                "price"=>"600",
                "description"=>"A RGB KEYBOARD",
                "category"=>"Keyboard",
                "gallery"=>"https://i.ibb.co/xMD2fBv/8d81298224e4f3659dce38135173dc04.jpg"
            ],
            [
                'name'=>'Mouse',
                "price"=>"600",
                "description"=>"A Disgned Black & Whiten A4 Tech Mouse ",
                "category"=>"Mouse",
                "gallery"=>"https://i.ibb.co/thVNGfr/images-1.jpg"
            ],
            [
                'name'=>'Cemera',
                "price"=>"60000",
                "description"=>"A Digital Cemra ",
                "category"=>"Cemera",
                "gallery"=>"https://i.ibb.co/K2GhHW9/106-1063189-canon-camera-png-transparent-image-canon-camera-png.png"
            ],
            [
                'name'=>'Headphone',
                "price"=>"800",
                "description"=>"A High Quality HeadPhone ",
                "category"=>"Headphone",
                "gallery"=>"https://i.ibb.co/YLXtfBB/virtuoso-white-500x500.jpg"
            ],
            [
                'name'=>'Water Filter',
                "price"=>"3300",
                "description"=>"A Pure IT 23 Liter water Filter ",
                "category"=>"Water Filter",
                "gallery"=>"https://i.ibb.co/8Kwc9Xt/classic-3.webp"
            ],
            [
                'name'=>'Realme 8 pro',
                "price"=>"27000",
                "description"=>"A  RealMe 8 Pro Mobile Phone",
                "category"=>"Mobile Phone",
                "gallery"=>"https://i.ibb.co/j8hfDps/959e7298ff9a0ae1ed73fd2bc115e5fc95586a86.jpg"
            ],
            [
                'name'=>'Face Wash',
                "price"=>"270",
                "description"=>"A  Nive Men Mens FaceWash",
                "category"=>" face Wash",
                "gallery"=>"https://i.ibb.co/rmfZchF/nivea-men-protect-and-care-deep-cleaning-face-wash.jpg"
            ],


        ]);
    }
}
