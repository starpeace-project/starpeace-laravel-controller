<?php

use Illuminate\Database\Seeder;
use Starpeace\Models\Eloquent\Common\World;
use Starpeace\Models\Eloquent\Common\Tycoon;
use Starpeace\Models\Eloquent\Common\WorldTycoon;

class WorldTycoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $worlds = World::all();
        $tycoons = Tycoon::all();

        for ($i = 0; $i < 3; $i++) {
            $world_tycoons = [];

            foreach ($tycoons as $tycoon) {
                $world = $worlds->random();

                $wt = [
                    'world_id' => $world->id,
                    'tycoon_id' => $tycoon->id,
                    'last_request' => date('Y-m-d H:i:s'),
                    'last_location_x' => 100,
                    'last_location_y' => 100,
                ];
                $world_tycoons[] = $wt;
            }

            foreach ($world_tycoons as $world_tycoon) {
                if (!WorldTycoon::where($world_tycoon)->exists()) {
                    WorldTycoon::create($world_tycoon);
                }
            }
        }

    }
}
