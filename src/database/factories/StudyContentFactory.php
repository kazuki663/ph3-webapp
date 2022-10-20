<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StudyContent;
use Faker\Generator as Faker;

$factory->define(StudyContent::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,2),
        'content_id' => $faker->numberBetween(1,3),
        'time' => $faker->numberBetween(1,10),
        'day' => $faker->dateTimeBetween($startDate = '-2 month', $endDate = 'now')->format('Y-m-d'),
    ];
});
