<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        Product::FIELD_NAME => $faker->word,
        Product::FIELD_PRICE => $faker->randomFloat(2, 10, 1000),
        Product::FIELD_SIZE => rand(1, 99999),
        Product::FIELD_SIZE_UNIT => 'гр',
        Product::FIELD_ORDER_LINK => $faker->url,
        Product::FIELD_DESCRIPTION => $faker->boolean() ? $faker->text() : null,
    ];
});
