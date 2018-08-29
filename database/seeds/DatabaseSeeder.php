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
        $this->call(FactionTableSeeder::class);
        $this->call(FactionBonusTableSeeder::class);
        $this->call(FactionBonusesTableSeeder::class);
        $this->call(BuildingVariableTableSeeder::class);
        $this->call(TycoonCompanyTableSeeder::class);
        $this->call(BuildingSetSeeder::class);
        $this->call(BuildingTableSeeder::class);
        $this->call(BuildingSetBuildingsSeeder::class);
        $this->call(BuildingInputSeeder::class);
        $this->call(BuildingOutputSeeder::class);
        $this->call(MapTownTableSeeder::class);
        $this->call(TycoonBuildingTableSeeder::class);
    }
}
