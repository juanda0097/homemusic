<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Medial;
use Faker\Generator as Faker;

$factory->define(Medial::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
    ];
});
