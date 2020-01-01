<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'entreprise_id' => factory('App\Entreprise')->create(), // ce que je fais ici c'est réutilisé un factory à l'intérieur de mon factory pour lier l'entreprise_id à l'id d'une entreprise que je viendrais de créer
        'name' => $faker->name,
        'email' => $faker->email,
        'status'=> 1
    ];
});
