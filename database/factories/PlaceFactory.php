<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\place;
use App\category;
use App\User;
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
        'category_id' => category::inRandomOrder()->first()->id,
        'user_id' => User::inRandomOrder()->first()->id,
        'name' => $faker->company,
        'phone_number' => $faker->numerify('####-####-####'),
        'address' => $faker->address,
        'open_time' => '07:00 - 16:00',
        'description' => $faker->paragraph,
        'url_gmap' => 'https://goo.gl/maps/8ZQYN4j7E25Ph4V16',
        'is_open' => 1,
        'is_close' => 0,
        'is_off' => 0,
        'counter' => $faker->randomDigit,
    ];
});
