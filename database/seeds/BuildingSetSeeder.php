<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\BuildingSet;

class BuildingSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuildingSet::create([
            'name' => 'Original',
        ]);
        BuildingSet::create([
            'name' => 'Sp2',
        ]);
        BuildingSet::create([
            'name' => 'SPO',
        ]);
    }
}
