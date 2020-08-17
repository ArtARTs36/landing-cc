<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bundles\Gallery\Models\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        Image::FIELD_NAME => $faker->word,
        Image::FIELD_DESCRIPTION => $faker->text(80),
        Image::FIELD_EXTENSION => Image::EXTENSION_JPG,
    ];
});
