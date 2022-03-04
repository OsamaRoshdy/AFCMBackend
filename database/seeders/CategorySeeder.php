<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'name_en' => 'TOP NOTCH',
                'name_ar' => 'اخبار من الدرجة الأولي',
                'created_at' => now()
            ],
            [
                'name_en' => 'College Magazine',
                'name_ar' => 'مجلة الكلية',
                'created_at' => now()
            ],
            [
                'name_en' => 'Press Releases',
                'name_ar' => 'الاخبار الصحفية',
                'created_at' => now()
            ],
            [
                'name_en' => 'Medical News',
                'name_ar' => 'الاخبار الطبية',
                'created_at' => now()
            ],

        ];


        Category::insert($data);
    }
}
