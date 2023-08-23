<?php

namespace App\Domain\User;

use App\Domain\User\Events\UserPasswordReset;
use App\Domain\User\Events\UserPasswordUpdated;
use App\Domain\User\Events\UserRegistered;
use App\Infrastructure\Laravel\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class UserProjector extends Projector
{
    public function onUserRegistered(UserRegistered $event): void
    {
        (new User($event->attributes))->save();
    }

    public function onUserPasswordUpdated(UserPasswordUpdated $event): void
    {
        User::where('uuid', $event->uuid)->update([
            'password' => Hash::make($event->password),
        ]);
    }

    public function onUserPasswordReset(UserPasswordReset $event): void
    {
        User::where('uuid', $event->uuid)->forceFill([
            'password' => Hash::make($event->password),
            'remember_token' => Str::random(60),
        ])->save();
    }
}
