<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\FactionBonuses;

class FactionBonusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FactionBonuses::create([
           'faction_id' => '1',
           'faction_bonus_id' => '1',
           'value' => '10',
        ]);
        FactionBonuses::create([
           'faction_id' => '2',
           'faction_bonus_id' => '2',
           'value' => '10',
        ]);
        FactionBonuses::create([
           'faction_id' => '3',
           'faction_bonus_id' => '3',
           'value' => '10',
        ]);
        FactionBonuses::create([
           'faction_id' => '4',
           'faction_bonus_id' => '4',
           'value' => '10',
        ]);
    }
}
