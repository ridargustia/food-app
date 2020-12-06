<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product;
use App\place;
use App\category;
use App\subCategory;
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
        'place_id' => place::inRandomOrder()->first()->id,
        'category_id' => category::inRandomOrder()->first()->id,
        'subcategory_id' => subCategory::inRandomOrder()->first()->id,
        'name' => $faker->word,
        'price' => $faker->numberBetween(10000, 100000),
        'description' => $faker->paragraph,
        'image' => 'default.jpg',
        'is_active' => 1,
        'is_order' => 1,
        'counter' => $faker->randomDigit,
        'rating' => $faker->numberBetween($min = 0, 5),
    ];
});
