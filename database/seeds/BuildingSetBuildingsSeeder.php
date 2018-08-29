<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\Building;
use Starpeace\Models\Eloquent\Common\BuildingSet;
use Starpeace\Models\Eloquent\Common\BuildingSetBuilding;

class BuildingSetBuildingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buildings = Building::all();
        $building_sets = BuildingSet::all();

        foreach ($building_sets as $building_set) {
            for ($i = 0; $i <= mt_rand(10, 50); $i++) {
                BuildingSetBuilding::create([
                   'building_set_id' => $building_set->id,
                   'building_id' => $buildings[$i]->id,
                ]);
            }
        }
    }
}
