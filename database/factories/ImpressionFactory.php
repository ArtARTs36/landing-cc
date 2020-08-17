<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(\App\Models\Impression::class, function (Faker $faker) {
    return [
        \App\Models\Impression::FIELD_AUTHOR_FULL_NAME => $faker->text(15),
        \App\Models\Impression::FIELD_MESSAGE => $faker->text(150),
        \App\Models\Impression::FIELD_AUTHOR_EMAIL => $faker->email,
        \App\Models\Impression::FIELD_IS_ACTIVE => true,
        \App\Models\Impression::FIELD_AUTHOR_POSITION => 'Сотрудник',
        \App\Models\Impression::FIELD_AUTHOR_IP => $faker->ipv4,
    ];
});
