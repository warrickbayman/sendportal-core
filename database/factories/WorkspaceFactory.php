<?php

/** @var Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Sendportal\Base\Models\User;
use Sendportal\Base\Models\Workspace;

$factory->define(Workspace::class, static function (Faker $faker) {
    return [
        'name' => $faker->company,
        'owner_id' => factory(User::class),
    ];
});

$factory->afterCreating(Workspace::class, static function (Workspace $workspace, Faker $faker) {
    $workspace->users()->attach($workspace->owner_id, ['role' => Workspace::ROLE_OWNER]);
});
