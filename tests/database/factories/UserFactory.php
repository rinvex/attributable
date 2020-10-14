<?php

declare(strict_types=1);

use Faker\Generator as Faker;
use Rinvex\Attributes\Tests\Models\User;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => 'foobarbaz',
    ];
});
