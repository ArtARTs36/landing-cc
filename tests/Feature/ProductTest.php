<?php

namespace Tests\Feature;

use App\Bundles\Product\Http\Requests\SetProducts;
use App\Bundles\Product\Services\ProductService;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class ProductTest
 * @package Tests\Feature
 */
class ProductTest extends TestCase
{
    use RefreshDatabase;

    protected const BASE_URL = 'api/products';

    /**
     * @throws \Throwable
     */
    public function testSet(): void
    {
        $products = factory(Product::class, 10)->make();

        $response = app(ProductService::class)->set($products->toArray());

        self::assertCount(10, $response);
        self::assertEquals(10, Product::query()->count());
    }
}
