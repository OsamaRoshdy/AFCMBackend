<?php

namespace Database\Seeders;

use App\Models\MainPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainPageSeeder extends Seeder
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
                'name_ar' => 'الرئيسية',
                'name_en' => 'Home',
                'status' => 1,
                'created_at' => now(),

            ],
            [
                'name_ar' => 'الطلاب',
                'name_en' => 'Students',
                'status' => 1,
                'created_at' => now(),

            ],
            [
                'name_ar' => 'العاملين',
                'name_en' => 'Staff',
                'status' => 1,
                'created_at' => now(),

            ],
            [
                'name_ar' => 'تواصل معنا',
                'name_en' => 'Contact Us',
                'status' => 1,
                'created_at' => now(),
            ],

        ];
        foreach ($data as $item) {
            MainPage::create($item);
        }

    }
}
