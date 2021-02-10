<?php

namespace App\Bundles\Page\Repositories;

use App\Contracts\Repository;
use App\Models\ExternalAboutUsPost;
use Illuminate\Support\Collection;

class ExternalAboutUsPostRepository extends Repository
{
    protected function getModelClass(): string
    {
        return ExternalAboutUsPost::class;
    }

    public function top(int $count = 3): Collection
    {
        return $this
            ->newQuery()
            ->limit($count)
            ->latest($this->newModel()->getCreatedAtColumn())
            ->get();
    }
}
