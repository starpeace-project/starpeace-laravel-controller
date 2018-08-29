<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\Tycoon;
use Starpeace\Models\Eloquent\Common\Faction;
use Starpeace\Models\Eloquent\Common\TycoonCompany;

use Faker\Generator as Faker;

class TycoonCompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tycoons = Tycoon::all();
        $factions = Faction::all();

        foreach ($tycoons as $tycoon) {
            for ($i=0; $i <= mt_rand(1,5); $i++) {
                $faction = $factions[mt_rand(0,3)];

                TycoonCompany::create([
                   'tycoon_id' => $tycoon->id,
                   'faction_id' => $faction->id,
                   'name' => $faker->lastName,
                ]);
            }
        }

    }
}
