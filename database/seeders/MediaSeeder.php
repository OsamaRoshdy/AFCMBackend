<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
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
                'url' => 'LTh3unQax_0',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,
                'created_at' => now()
            ],
            [
                'url' => 'cM-Un5d10MQ',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,
                'created_at' => now()

            ],
            [
                'url' => '56FX7x7WGZU',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,
                'created_at' => now()

            ],
            [
                'url' => 'nLx7lLeA0EE',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,
                'created_at' => now()

            ],
            [
                'url' => 'uJmM2xCHKAs',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,
                'created_at' => now()

            ],
            [
                'url' => 'LTh3unQax_0',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,
                'created_at' => now()

            ],

        ];

        Media::insert($data);


        $data = [];
        for ($i=1;$i <= 30;$i++) {
            $data[] = [
                'image_name' => $i . '.jpg',
                'title_ar' => 'الاسم باللغة العربية',
                'title_en' => 'English Name',
                'status' => 1,
                'type' => Media::TYPE_IMAGE,
                'created_at' => now(),
            ];
        }

        Media::insert($data);
    }
}
