<?php

namespace App\Application\Infrastructure\Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

trait SupportProjections
{
    public function newModel(array $attributes = []): Model
    {
        return Factory::newModel([
            'uuid' => fake()->uuid(),
            ...$attributes,
        ])->writeable();
    }
}
