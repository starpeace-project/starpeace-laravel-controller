<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\GalaxyType;
use Starpeace\Models\Eloquent\Common\Galaxy;

class GalaxyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GalaxyType::create([
            'name' => 'free',
            'display_name' => 'Free'
        ]);
        GalaxyType::create([
            'name' => 'subscriber',
            'display_name' => 'Subscriber'
        ]);
        GalaxyType::create([
            'name' => 'private',
            'display_name' => 'Private'
        ]);
        GalaxyType::create([
            'name' => 'sponsored',
            'display_name' => 'Sponsored'
        ]);

        Galaxy::create([
            'galaxy_type_id' => 1,
            'name' => 'milky-way',
            'display_way' => 'Milky Way',
        ]);
        Galaxy::create([
            'galaxy_type_id' => 2,
            'name' => 'andromeda',
            'display_way' => 'Andromeda',
        ]);
        Galaxy::create([
            'galaxy_type_id' => 3,
            'name' => 'black-eye-galaxy',
            'display_way' => 'Black Eye Galaxy',
        ]);
        Galaxy::create([
            'galaxy_type_id' => 4,
            'name' => 'virgo-stellar-stream',
            'display_way' => 'Virgo Stellar Stream',
        ]);
    }
}
