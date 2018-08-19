<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\MapCategory;

class MapCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MapCategory::create([
           'name' => 'system',
           'display_name' => 'System',
        ]);
        MapCategory::create([
           'name' => 'private',
           'display_name' => 'Private',
        ]);
        MapCategory::create([
           'name' => 'sponsored',
           'display_name' => 'Sponsored',
        ]);
    }
}
