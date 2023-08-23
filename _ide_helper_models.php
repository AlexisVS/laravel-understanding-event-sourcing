<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Domain\Account{
/**
 * App\Domain\Account\Account
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property int $balance
 * @property string|null $user_uuid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Infrastructure\Laravel\Models\User|null $user
 * @method static \Database\Factories\Domain\Account\AccountFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUserUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUuid($value)
 * @noinspection PhpFullyQualifiedNameUsageInspection
 * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
 */
	class Account extends \Eloquent {}
}

namespace App\Domain\User{
/**
 * App\Domain\User\User
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Domain\Account\Account> $accounts
 * @property-read int|null $accounts_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\Domain\User\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Infrastructure\Laravel\Models\User whereUuid($value)
 * @noinspection PhpFullyQualifiedNameUsageInspection
 * @noinspection PhpUnnecessaryFullyQualifiedNameInspection
 */
	class User extends \Eloquent {}
}

