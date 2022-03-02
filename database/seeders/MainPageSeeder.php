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
            ],
            [
                'name_ar' => 'الطلاب',
                'name_en' => 'Students',
            ],
            [
                'name_ar' => 'العاملين',
                'name_en' => 'Staff',
            ],
            [
                'name_ar' => 'تواصل معنا',
                'name_en' => 'Contact Us',
            ],

        ];
        foreach ($data as $item) {
            MainPage::create($item);
        }

    }
}
