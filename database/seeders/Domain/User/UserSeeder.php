<?php

namespace Database\Seeders\Domain\User;

use App\Domain\User\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(1, [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ])->create();

        User::factory()->count(10)->create();
    }
}
