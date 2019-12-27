<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Model\Categori\Categori::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'name_categori' => $word,
    ];
});
