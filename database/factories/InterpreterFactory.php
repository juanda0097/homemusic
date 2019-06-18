<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Interpreter;
use Faker\Generator as Faker;

$factory->define(Interpreter::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'nationality'=>$faker->country,
    ];
});
