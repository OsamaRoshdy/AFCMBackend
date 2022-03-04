<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
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
                'name_ar' => 'قسم علم وظائف الأعضاء',
                'name_en' => 'Physiology Department',
            ],
            [
                'name_ar' => 'قسم التشريح',
                'name_en' => 'Anatomy Department',
            ],
            [
                'name_ar' => 'قسم الأنسجة',
                'name_en' => 'Histology Department',
            ],
            [
                'name_ar' => 'قسم الكيمياء الحيوية ',
                'name_en' => 'Biochemistry Department',
            ],
            [
                'name_ar' => 'قسم علم الأمراض',
                'name_en' => 'Pathology Department',
            ],
            [
                'name_ar' => 'قسم الطفيليات',
                'name_en' => 'Parasitology Department',
            ],
            [
                'name_ar' => 'قسم الأحياء الدقيقة',
                'name_en' => 'Microbiology Department',
            ],
            [
                'name_ar' => 'قسم علم وظائف الأعضاء',
                'name_en' => 'Physiology Department',
            ],

        ];


        for ($i=1; $i <= 8 ;$i++) {
            Department::create([
                'name_ar' => $data[$i-1]['name_ar'],
                'name_en' => $data[$i-1]['name_en'],
                'image_name' => $i . '.jpg',
                'description_ar' => '',
                'description_en' => '',
                'status' => 1,
                'sort' => $i,
                'created_at' => now(),
            ]);
        }
    }
}
