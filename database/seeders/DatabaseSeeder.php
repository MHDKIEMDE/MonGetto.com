<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('password'), // par exemple, vous pouvez changer cela selon vos besoins
        'remember_token' => Str::random(10),
    ];
});
