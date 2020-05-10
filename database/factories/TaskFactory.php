<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'task' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'completed' => $faker->boolean($chanceOfGettingTrue = 50),
    ];
});
