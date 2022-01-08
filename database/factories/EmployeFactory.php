<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employe;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Employe::class, function (Faker $faker) {
    
    // $randomNumber = rand(1,100);
    // $cover = "https://picsum.photos/seed/{$randomNumber}/200/300";

    return [
        //
        'company_id' => Company::inRandomOrder()->first()->id, 
        'nama' => $faker->sentence(4),
        'email' => $faker->email(20),
    ];
});
