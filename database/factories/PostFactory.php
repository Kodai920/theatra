<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'about' => $faker->paragraph(3),
        'featured_img' => 'sample.jpg',
    ];
});
