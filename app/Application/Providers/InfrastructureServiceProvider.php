<?php

namespace App\Application\Providers;

class InfrastructureServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any infrastructure services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any infrastructure services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom([
            database_path('migrations/**'),
        ]);
    }
}
