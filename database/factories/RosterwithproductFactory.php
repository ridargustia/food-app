<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\roster;
use App\product;
use App\rosterWithProduct;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(rosterWithProduct::class, function (Faker $faker) {
    return [
        'roster_id' => roster::inRandomOrder()->first()->id,
        'product_id' => product::inRandomOrder()->first()->id,
    ];
});
