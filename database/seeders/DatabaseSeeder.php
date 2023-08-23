<?php

namespace Database\Seeders;

use App\Domain\Account\Account;
use App\Infrastructure\Laravel\Models\User;
use Database\Seeders\Domain\User\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);

        Account::factory()->count(50)->make()->each(function ($account) {
            $account->user_uuid = User::factory()->create()->uuid;
            $account->save();
        });
    }

}
