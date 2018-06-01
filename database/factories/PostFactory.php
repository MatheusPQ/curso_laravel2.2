<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) use($factory){
    
    return [
        'title' => $faker->sentence(3),
        'user_id' => $factory->create(App\User::class)->id,
        //Não precisa ter os usuários previamente criados
        //O factory do User irá criar um novo user p/ cada post
        'description' => $faker->text,
    ];
});
