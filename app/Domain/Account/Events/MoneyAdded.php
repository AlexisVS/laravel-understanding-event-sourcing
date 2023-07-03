<?php

namespace App\Domain\Account\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class MoneyAdded extends ShouldBeStored
{
    public function __construct(
        public mixed $accountUuid,
        public int   $amount
    )
    {
    }
}
