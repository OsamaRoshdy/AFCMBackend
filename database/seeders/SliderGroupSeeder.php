<?php

namespace Database\Seeders;

use App\Models\SliderGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SliderGroup::create([
            'name' => 'Home Slider',
            'status' => 1,
            'main_page_id' => 1,
        ]);
    }
}
