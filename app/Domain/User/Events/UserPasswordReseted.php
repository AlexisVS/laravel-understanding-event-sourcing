<?php

namespace App\Domain\User\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class UserPasswordReseted extends ShouldBeStored
{

    /**
     * @param string $uuid
     * @param string $password
     */
    public function __construct(string $uuid, string $password)
    {
        $this->uuid = $uuid;
        $this->password = $password;
    }
}
