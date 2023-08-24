<?php

namespace App\Domain\User;

use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class UserAggregatRoot extends AggregateRoot
{

    public function register(array $attributes): UserAggregatRoot
    {
        $this->loadUuid($attributes['uuid']);
        $this->recordThat(new Events\UserRegistered($attributes['uuid'], $attributes));

        return $this;
    }

    public function updatePassword($password): UserAggregatRoot
    {
        $this->recordThat(new Events\UserPasswordUpdated($this->uuid(), $password));

        return $this;
    }

    public function resetPassword($password): UserAggregatRoot
    {
        $this->recordThat(new Events\UserPasswordReset($this->uuid(), $password));

        return $this;
    }
}
