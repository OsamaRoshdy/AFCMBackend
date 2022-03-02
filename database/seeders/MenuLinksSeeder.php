<?php

namespace Database\Seeders;

use App\Models\MenuLinks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuLinksSeeder extends Seeder
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
                'main_page_id' => 1,
            ],
            [
                'name_ar' => 'الطلاب',
                'name_en' => 'Students',
                'main_page_id' => 2,

            ],
            [
                'name_ar' => 'العاملين',
                'name_en' => 'Staff',
                'main_page_id' => 3,
            ],

        ];
        foreach ($data as $item) {
            MenuLinks::create($item);
        }
    }
}
