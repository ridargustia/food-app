<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product;
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

$factory->define(product::class, function (Faker $faker) {
    return [
        'id_place' => $faker->randomElement($array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)),
        'id_category' => 1,
        'id_subcategory' => $faker->numberBetween($min = 0, 13),
        'name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'price' => $faker->randomElement($array = array(5000, 7500, 8000, 10000, 11500, 12000, 17000)),
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'image' => 'default.jpg',
        'is_active' => 1,
        'is_order' => 1,
        'counter' => $faker->randomDigit,
        'rating' => $faker->numberBetween($min = 0, 5),
    ];
});
