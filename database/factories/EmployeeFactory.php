<?php

use Faker\Generator as Faker;
use App\Models\Employee\EmployeeEloquent;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(EmployeeEloquent::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName(),
        'lastname' => $faker->lastName(),
        'job' => $faker->jobTitle,
        'address' => $faker->address,
        'education' => $faker->randomElement(['SD', 'SMP', 'SMA', 'S1'])
    ];
});
