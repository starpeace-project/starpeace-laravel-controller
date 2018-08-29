<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\Building;

class BuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Building::class, 50)->create();
    }
}
