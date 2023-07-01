<?php

namespace App\Infrastructure\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use ReflectionClass;

abstract class AbstractDomainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = static::getModel();
    }

    /**
     * get the Model.
     */
    private static function getModel(): string
    {
        $class = new ReflectionClass(static::class);

        $namespace = $class->getNamespaceName();

        $modelNamespace = str_replace('Database\Factories', 'Models', $namespace);

        $modelClassName = str_replace('Factory', '', $class->getShortName());

        return $modelNamespace . '\\' . $modelClassName;
    }
}
