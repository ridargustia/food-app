<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\article;
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

$factory->define(article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'category' => $faker->randomElement($array = array('Kuliner', 'Kerajinan', 'Wisata')),
        'image' => 'default.jpg',
    ];
});
