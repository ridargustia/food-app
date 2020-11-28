<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\review;
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

$factory->define(review::class, function (Faker $faker) {
    return [
        'id_product' => $faker->randomElement($array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)),
        'id_user' => $faker->randomElement($array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)),
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    ];
});
