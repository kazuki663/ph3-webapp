<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StudyLanguage;
use Faker\Generator as Faker;

$factory->define(StudyLanguage::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,2),
        'language_id' => $faker->numberBetween(1,8),
        'time' => $faker->numberBetween(1,10),
        'day' => $faker->dateTimeBetween($startDate = '-2 month', $endDate = 'now')->format('Y-m-d'),
    ];
});
