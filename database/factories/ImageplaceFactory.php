<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\imagePlace;
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

$factory->define(imagePlace::class, function (Faker $faker) {
    return [
        'place_id' => place::inRandomOrder()->first()->id,
        'name' => 'default.jpg',
    ];
});
