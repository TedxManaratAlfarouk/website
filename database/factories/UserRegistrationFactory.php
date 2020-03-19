<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserRegistration;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(UserRegistration::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'key' => Str::uuid(),

    ];
});
