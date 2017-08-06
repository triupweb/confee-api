<?php


namespace Confee\Domains\Users\Database\Factories;


use Confee\Domains\Users\User;
use Confee\Support\Database\ModelFactory;

class UserFactory extends ModelFactory
{
    protected $model = User::class;

    protected function fields()
    {
        static $password;

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    }
}