<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(MainPageSeeder::class);
        $this->call(MenuLinksSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(SliderGroupSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(BlockSeeder::class);
        $this->call(StatisticSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(MediaSeeder::class);
        $this->call(PartnerSeeder::class);
    }
}
