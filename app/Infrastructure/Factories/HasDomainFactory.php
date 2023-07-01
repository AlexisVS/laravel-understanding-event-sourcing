<?php

namespace App\Infrastructure\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use ReflectionClass;

trait HasDomainFactory
{
    use HasFactory;

    /*
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        $class = new ReflectionClass(static::class);
        $namespace = $class->getNamespaceName();


        $modelNamespace = str_replace('Models', 'Database\Factories', $namespace);

        /**  @var Factory $factory */
        $factory = $modelNamespace . '\\' . $class->getShortName() . 'Factory';

        return $factory::new();
    }
}
