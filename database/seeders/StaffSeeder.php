<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i=1;$i<=20;$i++) {
            $data[] = [
                'title_ar' => 'اسم القسم',
                'title_en' => 'section title ' . $i,
                'full_name_ar' => 'الاسم بالكامل',
                'full_name_en' => 'Full Name',
                'image_name' => $i . '.jpg',
                'sort' => $i ,
            ];
        }

        Staff::insert($data);

    }
}
