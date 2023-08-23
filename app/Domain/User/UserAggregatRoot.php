<?php

namespace App\Domain\User;

use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class UserAggregatRoot extends AggregateRoot
{
    public function updatePassword($password): UserAggregatRoot
    {
        $this->recordThat(new Events\UserPasswordUpdated($this->uuid(), $password));

        return $this;
    }

    public function resetPassword($password): UserAggregatRoot
    {
        $this->recordThat(new Events\UserPasswordReseted($this->uuid(), $password));

        return $this;
    }
}
