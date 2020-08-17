<?php

namespace App\Abstracts;

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
