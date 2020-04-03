<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [
       'title'=>$title,
        'body'=>$faker->text,
       'slug'=>\Illuminate\Support\Str::slug($title),
        'category_id'=>function() {
         return \App\Model\Category::all()->random();
        },
        'user_id'=>function() {
        return \App\User::all()->random();
        }

    ];
});
