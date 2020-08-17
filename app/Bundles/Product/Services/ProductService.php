<?php

namespace App\Bundles\Product\Services;

use App\Bundles\Product\Repositories\ProductRepository;
use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class ProductService
{
    public const CACHE_KEY_ALL = 'products_all';
    public const CACHE_KEY_TOP = 'products_top';

    /** @var ProductRepository */
    private $repository;

    /**
     * ProductService constructor.
     * @param ProductRepository $repository
     */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $items
     * @return Collection
     */
    public function set(array $items)
    {
        Product::query()->truncate();

        $products = collect();

        foreach ($items as $item) {
            $products->push(Product::query()->create($item));
        }

        return $products;
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return Cache::remember(static::CACHE_KEY_ALL, 3600 * 24 * 14, function () {
            return $this->repository->all();
        });
    }

    /**
     * @return Collection
     */
    public function top(): Collection
    {
        return Cache::remember(static::CACHE_KEY_TOP, 3600 * 24 * 14, function () {
            return $this->repository->top(3);
        });
    }
}
