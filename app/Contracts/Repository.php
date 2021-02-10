<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    /**
     * @return string
     */
    abstract protected function getModelClass(): string;

    /**
     * @return Builder
     */
    public function newQuery(): Builder
    {
        return $this->getModelClass()::query();
    }

    protected function newModel(): Model
    {
        $class = static::getModelClass();

        return new $class;
    }
}
