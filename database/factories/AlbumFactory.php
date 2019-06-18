<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'date'=>$faker->date,
        'homemusic_id' =>App\Models\Homemusic::all()->random()->id
    ];
});
