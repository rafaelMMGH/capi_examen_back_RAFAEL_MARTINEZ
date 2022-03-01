<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserDomicilio;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(UserDomicilio::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 100),
        'domicilio' =>  Str::random(45),
        'numero_exterior' => rand(100, 999),
        'colonia' =>  Str::random(25),
        'cp' => rand(29000, 44920),
        'ciudad' =>  Str::random(20),
    ];
});
