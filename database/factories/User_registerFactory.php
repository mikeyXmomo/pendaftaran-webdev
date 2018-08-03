<?php

use Faker\Generator as Faker;

$factory->define(App\Register::class, function (Faker $faker) {
    return [
        'nama'      => $faker->name,
        'nrp'       => '2103171043',
        'kelas'     => 'D3 IT B',
        'email'     => $faker->unique()->safeEmail,
        'no_wa'     => '089649843946',
        'id_line'   => 'ilhamassidiqy',
    ];
});
