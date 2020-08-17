<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bundles\Gallery\Models\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        Album::FIELD_NAME => $faker->word,
    ];
});
