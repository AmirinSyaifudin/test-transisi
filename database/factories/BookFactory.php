<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book; //add model
use Faker\Generator as Faker;
use App\Author; // add model 

$factory->define(Book::class, function (Faker $faker) {
    // membuat random imager untuk cover 
    $randomNumber = rand(1,100);
    $cover = "https://picsum.photos/seed/{$randomNumber}/200/300";

    return [
        // jenerik data buku 
        'author_id' => Author::inRandomOrder()->first()->id, // mengambil data author_id
        'title' => $faker->sentence(4),
        'description' => $faker->sentence(50),
        'cover' => $cover,
        'qty' => rand(10,20),
    ];
});
