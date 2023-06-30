<?php

declare(strict_types=1);


namespace App\Providers;

class DomainServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        /** @var Migrator $migrator */
//        $migrator = $this->app->get(Migrator::class);
//        $migrator->getMigrationFiles([
//            dirname(__DIR__) . 'Domain/**/Database/Migrations',
//            dirname(__DIR__) . 'Domain/**/**/Database/Migrations',
//            dirname(__DIR__) . 'Domain/**/**/**/Database/Migrations',
//        ]);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom([
            database_path('migrations'),
            dirname(__DIR__) . '/Domain/**/Database/Migrations',
            dirname(__DIR__) . '/Domain/**/**/Database/Migrations',
            dirname(__DIR__) . '/Domain/**/**/**/Database/Migrations',
        ]);
    }
}
