<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\BuildingVariable;

class BuildingVariableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuildingVariable::create([
           'name' => 'occupants',
        ]);
        BuildingVariable::create([
           'name' => 'occupancy',
        ]);
        BuildingVariable::create([
           'name' => 'raw_chemicals',
        ]);
        BuildingVariable::create([
           'name' => 'organic_chemicals',
        ]);
        BuildingVariable::create([
           'name' => 'fresh_food',
        ]);
        BuildingVariable::create([
           'name' => 'processed_food',
        ]);
        BuildingVariable::create([
           'name' => 'flour',
        ]);
        BuildingVariable::create([
           'name' => 'trousers',
        ]);
        BuildingVariable::create([
           'name' => 'shirts',
        ]);
    }
}
