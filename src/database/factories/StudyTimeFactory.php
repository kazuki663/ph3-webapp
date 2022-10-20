<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StudyTime;
use Faker\Generator as Faker;

$factory->define(StudyTime::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,2),
        'time' => $faker->numberBetween(1,10),
        'day' => $faker->dateTimeBetween($startDate = '-2 month', $endDate = 'now')->format('Y-m-d'),
    ];
});
