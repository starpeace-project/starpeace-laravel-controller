<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(GalaxyTypeSeeder::class);
        $this->call(MapCategorySeeder::class);
        $this->call(MapTableSeeder::class);
        $this->call(WorldTableSeeder::class);
        $this->call(TycoonTableSeeder::class);
        $this->call(WorldTycoonSeeder::class);
    }
}
