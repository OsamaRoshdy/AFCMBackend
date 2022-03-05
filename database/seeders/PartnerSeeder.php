<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'show_in_home' => 1,
                'show_in_footer' => 1,
                'type' => Partner::INTERNATIONAL,
                'sort' => 1,
                'image_name' => 3 . '.png',
                'name_ar' =>  'الاسم بالعربي',
                'name_en' =>  'English Name',
                'created_at' => now(),
            ],
            [
                'show_in_home' => 1,
                'show_in_footer' => 1,
                'type' => Partner::INTERNATIONAL,
                'sort' => 2,
                'image_name' => 1 . '.png',
                'name_ar' =>  'الاسم بالعربي',
                'name_en' =>  'English Name',
                'created_at' => now(),            ],
            [
                'show_in_home' => 1,
                'show_in_footer' => 1,
                'type' => Partner::INTERNATIONAL,
                'sort' => 3,
                'image_name' => 2 . '.png',
                'name_ar' =>  'الاسم بالعربي',
                'name_en' =>  'English Name',
                'created_at' => now(),            ],
            [
                'show_in_home' => 1,
                'show_in_footer' => 1,
                'type' => Partner::INTERNATIONAL,
                'sort' => 4,
                'image_name' => 2 . '.png',
                'name_ar' =>  'الاسم بالعربي',
                'name_en' =>  'English Name',
                'created_at' => now(),            ],
            [
                'show_in_home' => 1,
                'show_in_footer' => 1,
                'type' => Partner::INTERNATIONAL,
                'sort' => 5,
                'image_name' => 1 . '.png',
                'name_ar' =>  'الاسم بالعربي',
                'name_en' =>  'English Name',
                'created_at' => now(),            ],
            [
                'show_in_home' => 1,
                'show_in_footer' => 1,
                'type' => Partner::INTERNATIONAL,
                'sort' => 6,
                'image_name' => 3 . '.png',
                'name_ar' =>  'الاسم بالعربي',
                'name_en' =>  'English Name',
                'created_at' => now(),            ],
        ];


        Partner::insert($data);
    }
}
