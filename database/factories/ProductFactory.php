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
        'id_place' => $faker->randomElement($array = array(2, 3, 4)),
        'id_category' => $faker->randomElement($array = array(1, 2, 3)),
        'id_subcategory' => $faker->randomElement($array = array(1, 2, 3)),
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'price' => $faker->randomElement($array = array(5000, 7500, 8000, 8500)),
        'description' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'image' => $faker->sentence($nbWords = 3, $variableNbWords = true).'.jpg',
        'is_active' => 1,
        'is_order' => 1,
        'counter' => $faker->randomDigit,
        'rating' => $faker->numberBetween($min = 0, 5),
    ];
});
