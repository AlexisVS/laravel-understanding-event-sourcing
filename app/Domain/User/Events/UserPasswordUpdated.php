<?php

namespace App\Domain\User\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class UserPasswordUpdated extends ShouldBeStored
{

    public function __construct(
        public string $uuid,
        public string $password
    ) {
    }
}
