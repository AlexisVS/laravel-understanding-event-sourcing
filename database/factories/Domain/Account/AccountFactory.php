<?php

namespace Database\Factories\Domain\Account;

use App\Application\Infrastructure\Database\Factories\Traits\SupportProjections;
use App\Domain\Account\Account;

class AccountFactory extends \Illuminate\Database\Eloquent\Factories\Factory
{
    use SupportProjections;

    protected $model = Account::class;

    /**
     * @inheritDoc
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'balance' => $this->faker->randomFloat(2, 0, 1000000),
        ];
    }
}
