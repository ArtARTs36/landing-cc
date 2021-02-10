<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(\App\Bundles\Impression\Models\Impression::class, function (Faker $faker) {
    return [
        \App\Bundles\Impression\Models\Impression::FIELD_AUTHOR_FULL_NAME => $faker->text(15),
        \App\Bundles\Impression\Models\Impression::FIELD_MESSAGE => $faker->text(150),
        \App\Bundles\Impression\Models\Impression::FIELD_AUTHOR_EMAIL => $faker->email,
        \App\Bundles\Impression\Models\Impression::FIELD_IS_ACTIVE => true,
        \App\Bundles\Impression\Models\Impression::FIELD_AUTHOR_POSITION => 'Сотрудник',
        \App\Bundles\Impression\Models\Impression::FIELD_AUTHOR_IP => $faker->ipv4,
    ];
});
