<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\Building;
use Starpeace\Models\Eloquent\Common\BuildingVariable;
use Starpeace\Models\Eloquent\Common\BuildingInput;

class BuildingInputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buildings = Building::all();
        $building_variables = BuildingVariable::all();

        foreach ($buildings as $building) {
            for ($i = 0; $i < 2; $i++) {
                BuildingInput::create([
                    'building_id' => $building->id,
                    'variable_id' => $building_variables[mt_rand(0, count($building_variables) - 1)]->id,
                ]);
            }
        }
    }
}
