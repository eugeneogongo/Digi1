<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Incidence;
use Faker\Generator as Faker;

$factory->define(Incidence::class, function (Faker $faker) {

    return [
        'details' => $faker->word,
        'route_no' => $faker->word,
        'route' => $faker->word,
        'noplate' => $faker->word,
        'sacco' => $faker->word,
        'problem' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
