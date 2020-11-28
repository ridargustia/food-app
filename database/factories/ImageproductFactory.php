<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\imageProduct;
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

$factory->define(imageProduct::class, function (Faker $faker) {
    return [
        'id_product' => $faker->randomElement($array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)),
        'name' => 'default.jpg',
    ];
});
