<?php

namespace App\Domain\Account\Projectors;

use App\Domain\Account\Account;
use App\Domain\Account\Events\AccountCreated;
use App\Domain\Account\Events\MoneyAdded;
use App\Domain\Account\Events\MoneySubtracted;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class AccountProjector extends Projector
{
    public function onAccountCreated(AccountCreated $event): void
    {
        (new Account($event->accountAttributes))->writeable()->save();
    }

    public function onMoneyAdded(MoneyAdded $event): void
    {
        $account = Account::uuid($event->accountUuid);

        $account->balance += $event->amount;

        $account->writeable()->save();
    }

    public function onMoneySubtracted(MoneySubtracted $event): void
    {
        $account = Account::uuid($event->accountUuid);

        $account->balance -= $event->amount;

        $account->writeable()->save();
    }
}
