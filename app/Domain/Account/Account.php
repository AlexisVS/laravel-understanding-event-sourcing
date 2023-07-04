<?php

declare(strict_types=1);


namespace App\Domain\Account;

use App\Domain\Account\Events\AccountCreated;
use App\Domain\Account\Events\MoneyAdded;
use App\Domain\Account\Events\MoneySubtracted;
use App\Domain\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Ramsey\Uuid\Uuid;
use Spatie\EventSourcing\Projections\Projection;

class Account extends Projection
{
    use HasFactory;

    protected $table = 'accounts';
    protected $guarded = [];

    public static function createWithAttributes(array $attributes): Account
    {
        /*
         * Let's generate a uuid.
         */
        $attributes['uuid'] = (string)Uuid::uuid4();

        /*
         * The account will be created inside this event using the generated uuid.
         */
        event(new AccountCreated($attributes));

        /*
         * The uuid will be used the retrieve the created account.
         */
        return static::uuid($attributes['uuid']);
    }

    public function addMoney(int $amount): void
    {
        event(new MoneyAdded($this->uuid, $amount));
    }

    public function subtractMoney(int $amount): void
    {
        event(new MoneySubtracted($this->uuid, $amount));
    }

    public static function uuid(string $uuid): Account
    {
        return (new Account)->where('uuid', $uuid)->firstOrFail();
    }

    /**
     * Relationships
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_uuid', 'uuid');
    }
}
