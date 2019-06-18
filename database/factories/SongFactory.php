<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'duration'=>$faker->name,
        'interpreter_id' =>App\Models\Interpreter::all()->random()->id,
        'gender_id' =>App\Models\Gender::all()->random()->id
        

    ];
});
