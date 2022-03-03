<?php

namespace Database\Seeders;

use App\Models\Statistic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticSeeder extends Seeder
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
                'name_ar' => 'الخريجين',
                'name_en' => 'Graduates',
                'count' => '5000',
                'icon' => 'fa fa-graduation-cap fa-5x',
                'sort' => 1,
                'status' => 1,
            ],
            [
                'name_ar' => 'سنوات من الخبرة',
                'name_en' => 'Years Of Experience',
                'count' => '10',
                'icon' => 'fa fa-address-card',
                'sort' => 1,
                'status' => 1,
            ],
            [
                'name_ar' => 'الطلاب',
                'name_en' => 'Students',
                'count' => '5000',
                'icon' => 'fa fa-user',
                'sort' => 1,
                'status' => 1,
            ],
            [
                'name_ar' => 'طاقم التعليم',
                'name_en' => 'Education Staff',
                'count' => '5000',
                'icon' => 'fa fa-user-secret',
                'sort' => 1,
                'status' => 1,
            ],

        ];

        Statistic::insert($data);
    }
}
