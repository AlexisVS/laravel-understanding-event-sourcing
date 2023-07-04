<?php

namespace Database\Factories\Domain\Account;

use App\Application\Infrastructure\Database\Factories\Traits\SupportProjections;
use App\Domain\Account\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    use SupportProjections;

    protected $model = Account::class;

    /**
     * @inheritDoc
     */
    public function definition(): array
    {
        return [
            'uuid' => fake()->uuid(),
            'name' => fake()->name(),
            'balance' => fake()->randomFloat(2, 0, 1000000),
        ];
    }
}
