<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Tiket\Tiket;
use App\Model\Categori\Categori;
use Faker\Generator as Faker;

$factory->define(App\Model\Tiket\Tiket::class, function (Faker $faker) {
    $word = $faker->word;

    return [
        'name_tiket' => $word,
        'harga_tiket' => rand(30000,50000),
        'jumlah_tiket' => rand(0,30),
        'jenis_tiket' => $word,
        'id_kategori' =>function(){
            return Categori::all()->random();
        }
    ];
});
