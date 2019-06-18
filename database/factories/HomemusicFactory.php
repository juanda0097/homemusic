<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Homemusic;
use Faker\Generator as Faker;

$factory->define(Homemusic::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
    ];
});
