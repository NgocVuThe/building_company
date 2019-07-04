<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(rand(10,12)),
        'content' => $faker->realText(rand(15, 20)),
        'description' => $faker->realText(rand(10,20)),
        'category' => rand(1,4),
        'user_id' => rand(1,4),
        'num_collection' => rand(1,4),
    ];
});
