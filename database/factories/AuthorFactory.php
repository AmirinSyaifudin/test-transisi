<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author; // nama modelnya 
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        // pertemua ke 11
        'name' => $faker->name, 
    ];
});
