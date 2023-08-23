<?php

namespace App\Domain\User;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Domain\Account\Account;
use App\Domain\User\Events\UserRegistered;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasFactory;

    protected static function newFactory(): Factory
    {
        return \Database\Factories\Domain\User\UserFactory::new();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * The attributes that should be cast.
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, 'user_uuid', 'uuid');
    }

    public static function createWithAttributes(array $attributes): string
    {
        $attributes['uuid'] = Str::uuid()->toString();

        event(new UserRegistered(
            uuid: $attributes['uuid'],
            attributes: $attributes
        ));

        return $attributes['uuid'];
    }
}
