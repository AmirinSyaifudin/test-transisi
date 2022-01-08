<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Factory;
use Faker\Generator as Faker;
use App\Company;
use App\Employe;

$factory->define(Company::class, function (Faker $faker) {
   
    $randomNumber = rand(1,100);
    $cover = "https://picsum.photos/seed/{$randomNumber}/200/300";

    return [
        //  
        'nama' => $faker->sentence(4),
        'email' => $faker->email(20),
        'cover' => $cover,
    ];
});
