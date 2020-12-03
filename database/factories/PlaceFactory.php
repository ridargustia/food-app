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
        'category_id' => $faker->randomElement($array = array(1, 2, 3)),
        'user_id' => $faker->randomElement($array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)),
        'name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'phone_number' => $faker->numerify('####-####-####'),
        'address' => $faker->address,
        'open_time' => '07:00 - 16:00',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'url_gmap' => 'https://goo.gl/maps/8ZQYN4j7E25Ph4V16',
        'is_open' => 1,
        'is_close' => 0,
        'is_off' => 0,
        'counter' => $faker->randomDigit,
    ];
});
