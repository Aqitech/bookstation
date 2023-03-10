<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'fullname' => $faker->name,
        'designation' => $faker->jobTitle,
        'telephone' => $faker->phoneNumber,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
        'facebook_id' => $faker->unique()->safeEmail,
        'twitter_id' => $faker->unique()->safeEmail,
        'pinterest_id' => $faker->unique()->safeEmail,
        'profile' => $faker->text($maxNbChars = 200),
        'team_img' => 'No image found',
        'status' => $faker->randomElement(['DEACTIVE', 'ACTIVE'])
    ];
});