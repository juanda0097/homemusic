<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Gender;
use Faker\Generator as Faker;

$factory->define(Gender::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
    ];
});
