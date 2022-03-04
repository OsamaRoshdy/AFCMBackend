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
            ],
            [
                'url' => 'cM-Un5d10MQ',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,

            ],
            [
                'url' => '56FX7x7WGZU',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,
                ],
            [
                'url' => 'nLx7lLeA0EE',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,
                ],
            [
                'url' => 'uJmM2xCHKAs',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,
                ],
            [
                'url' => 'LTh3unQax_0',
                'show_in_home' => 1,
                'status' => 1,
                'type' => Media::TYPE_VIDEO,
                ],

        ];

        Media::insert($data);
    }
}
