<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Starpeace\Models\Eloquent\Common\Tycoon;

class TycoonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Faker $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = \App\User::all();

        foreach ($users as $user) {
            Tycoon::create([
               'user_id' => $user->id,
               'name' => $faker->userName,
               'cash' => mt_rand(10000000, 200000000)
            ]);
        }
    }
}
