<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\Tycoon;
use Starpeace\Models\Eloquent\Common\TycoonCompany;
use Starpeace\Models\Eloquent\Common\WorldTycoon;
use Starpeace\Models\Eloquent\Common\MapTown;
use Starpeace\Models\Eloquent\Common\Building;
use Starpeace\Models\Eloquent\Common\TycoonBuilding;
use Faker\Generator as Faker;

class TycoonBuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tycoons = Tycoon::all();
        $buildings = Building::all();

        foreach ($tycoons as $tycoon) {
            $worlds_tycoon_is_on = WorldTycoon::where('tycoon_id', $tycoon->id)->get();
            if (!empty($worlds_tycoon_is_on)) {
                $tycoon_companies = TycoonCompany::where('tycoon_id', $tycoon->id)->get();
                if (!empty($tycoon_companies)) {
                    foreach ($worlds_tycoon_is_on as $world_tycoon_is_on) {
                        $map_towns = MapTown::where('map_id', $world_tycoon_is_on->map_id)->get();
                        if (!empty($map_towns->items)) {
                            $map_town = $map_towns[mt_rand(0, count($map_towns) - 1)]->town_id;

                            foreach ($tycoon_companies as $tycoon_company) {
                                for ($i = 0; $i < mt_rand(0,10); $i++) {
                                    $building = $buildings[mt_rand(0, count($buildings) -1)];
                                    TycoonBuilding::create([
                                        'tycoon_id' => $tycoon->id,
                                        'company_id' => $tycoon_company->id,
                                        'world_id' => $world_tycoon_is_on->id,
                                        'map_town_id' => $map_town->id,
                                        'building_id' => $building->id,
                                        'name' => $faker->lastName,
                                        'upgrade_level' => mt_rand(0,100),
                                    ]);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
