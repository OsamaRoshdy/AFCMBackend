<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i=1; $i<= 7; $i++) {
            $data[] = [
                'description_ar' => 'وصف تجريبي باللغة العربية',
                'description_en' => 'description example in english',
                'sort' => $i,
                'status' => 1,
                'image_name' => $i . '.jpg',
                'slider_group_id' => 1,
                'created_at' => now()
            ];
        }

        Slider::insert($data);
    }
}
