<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\Faction;

class FactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faction::create([
            'name' => 'PGI',
        ]);
        Faction::create([
            'name' => 'Mariko',
        ]);
        Faction::create([
            'name' => 'Moab',
        ]);
        Faction::create([
            'name' => 'Dissident',
        ]);
    }
}
