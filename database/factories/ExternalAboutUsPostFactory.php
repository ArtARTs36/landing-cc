<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(\App\Models\ExternalAboutUsPost::class, function (Faker $faker) {
    return [
        \App\Models\ExternalAboutUsPost::FIELD_TITLE => $faker->text(15),
        \App\Models\ExternalAboutUsPost::FIELD_LINK => $faker->url,
        \App\Models\ExternalAboutUsPost::FIELD_PUBLISHED_AT => $faker->date(),
    ];
});
