<?php

use Illuminate\Database\Seeder;

class WorldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Starpeace\Models\Eloquent\Common\World::class, 20)->create();
    }
}
