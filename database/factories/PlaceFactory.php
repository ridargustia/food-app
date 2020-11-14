<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\place;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(place::class, function (Faker $faker) {
    return [
        'id_category' => $faker->randomElement($array = array(1, 2, 3)),
        'id_user' => $faker->randomElement($array = array(8, 9, 10)),
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'phone_number' => $faker->numerify('####-####-####'),
        'address' => $faker->address,
        'open_time' => '07:00 - 16:00',
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'url_gmap' => 'https://blablabla.com',
        'is_open' => 1,
        'is_close' => 0,
        'is_off' => 0,
        'counter' => $faker->randomDigit,
    ];
});
