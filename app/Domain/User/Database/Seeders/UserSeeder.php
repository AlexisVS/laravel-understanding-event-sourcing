<?php

namespace App\Domain\User\Database\Seeders;

use App\Domain\User\Database\Factories\UserFactory;
use App\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory(1, [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ])->create();

        User::factory(51)->create();
    }
}
