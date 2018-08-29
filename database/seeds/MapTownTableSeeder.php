<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\Map;
use Starpeace\Models\Eloquent\Common\Faction;
use Starpeace\Models\Eloquent\Common\MapTown;
use Faker\Generator as Faker;

class MapTownTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $maps = Map::all();
        $factions = Faction::all();

        foreach ($maps as $map) {
            for ($i = 0; $i <= 8; $i++) {
                MapTown::create([
                    'map_id' => $map->id,
                    'faction_id' => $factions[mt_rand(0, count($factions) -1)]->id,
                    'name' => $faker->lastName,
                    'location_x' => mt_rand(0, 1000),
                    'location_y' => mt_rand(0, 1000),
                ]);
            }
        }
    }
}
