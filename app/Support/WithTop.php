<?php

namespace App\Support;

use App\Models\Product;

trait WithTop
{
    public static function top(int $count = 3)
    {
        return static::query()
            ->limit($count)
            ->latest(Product::UPDATED_AT)
            ->get();
    }
}
