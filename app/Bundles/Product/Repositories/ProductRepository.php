<?php

namespace App\Bundles\Product\Repositories;

use App\Abstracts\Repository;
use App\Models\Product;
use Illuminate\Support\Collection;

/**
 * Class ProductRepository
 * @package App\Bundles\Product\Repositories
 */
final class ProductRepository extends Repository
{
    /**
     * @inheritDoc
     */
    protected function getModelClass(): string
    {
        return Product::class;
    }

    /**
     * @param int $count
     * @return Collection
     */
    public function top(int $count): Collection
    {
        return $this->newQuery()
            ->limit($count)
            ->latest(Product::UPDATED_AT)
            ->get();
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->newQuery()
            ->with(Product::RELATION_IMAGE)
            ->get();
    }
}
