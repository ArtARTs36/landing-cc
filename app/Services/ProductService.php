<?php

namespace App\Services;

use App\Models\Product;

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
}
