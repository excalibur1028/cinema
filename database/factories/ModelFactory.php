<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Schedule::class, function (Faker\Generator $faker) {
    return [
        'movie_id' => $faker->randomElement([1, 2, 3]),
        'room_id'  => $faker->randomElement([1, 2, 3]),
        'air_date' => $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 4 days'),
        'start_time' => $faker->randomElement(['10 PM', '12 PM', '2 PM', '4 PM']),
    ];
});
