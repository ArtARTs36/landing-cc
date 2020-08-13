<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Collection;

class ProductService
{
    public function set(array $items)
    {
        Product::query()->truncate();

        $products = collect();

        foreach ($items as $item) {
            $products->push(Product::query()->create($item));
        }

        return $products;
    }

    public function top(): Collection
    {
        return Product::query()
            ->limit(3)
            ->latest(Product::UPDATED_AT)
            ->get();
    }
}
