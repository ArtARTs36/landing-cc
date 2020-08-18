<?php

namespace App\Bundles\Page\Repositories;

use App\Abstracts\Repository;
use TCG\Voyager\Models\Page;

final class PageRepository extends Repository
{
    public const FIELD_SLUG = 'slug';
    public const FIELD_STATUS = 'status';

    public function getModelClass(): string
    {
        return Page::class;
    }

    public function findActive(string $slug): ?Page
    {
        return $this->newQuery()
            ->where(static::FIELD_SLUG, $slug)
            ->where(static::FIELD_STATUS, Page::STATUS_ACTIVE)
            ->first();
    }
}
