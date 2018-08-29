<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(Starpeace\Models\Eloquent\Common\Map::class, function (Faker $faker) {
    $name = strtolower($faker->userName);
    return [
        'map_category_id' => mt_rand(1, 3),
        'name' => $name,
        'display_name' => ucfirst($name),
        'map_x' => 1000,
        'map_y' => 1000,
        'location' => '/',
        'filename' => 'map.bmp',
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
    ];
});

$factory->define(\Starpeace\Models\Eloquent\Common\World::class, function (Faker $faker) {
    $name = $faker->firstName;
    return [
        'galaxy_id' => mt_rand(1, 4),
        'map_id' => mt_rand(1, 10),
        'name' => strtolower($name),
        'display_name' => ucfirst($name),
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
    ];
});

$factory->define(\Starpeace\Models\Eloquent\Common\Building::class, function (Faker $faker) {
    $factions = \Starpeace\Models\Eloquent\Common\Faction::all();
    return [
        'name' => $faker->lastName,
        'faction_id' => $factions[mt_rand(0, 3)],
    ];
});