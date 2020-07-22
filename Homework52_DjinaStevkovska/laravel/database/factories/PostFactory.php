<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;
use App\User;


$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'title'   => $faker->sentence,
        'body'    => $faker->paragraph
    ];
});
