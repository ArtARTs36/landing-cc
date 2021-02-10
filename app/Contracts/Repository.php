<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Builder;

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
}
