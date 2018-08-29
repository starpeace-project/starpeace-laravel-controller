<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\FactionBonus;

class FactionBonusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FactionBonus::create([
            'name' => 'Rents',
            'description' => 'Rent boost',
            'default_value' => '10',
        ]);
        FactionBonus::create([
            'name' => 'Police Coverage',
            'description' => 'Police coverage boost',
            'default_value' => '10',
        ]);
        FactionBonus::create([
            'name' => 'Fire Coverage',
            'description' => 'Fire coverage boost',
            'default_value' => '10',
        ]);
        FactionBonus::create([
            'name' => 'Mining Cost Reduction',
            'description' => 'Reduced mining costs',
            'default_value' => '10',
        ]);
    }
}
