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

$faker = Faker\Factory::create('es');

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(PlatziLaravel\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(PlatziLaravel\Post::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'body' => $faker->realText($maxNbChars = 4000, $indexSize = 4),
    ];
});
