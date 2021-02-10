<?php

namespace App\Bundles\Product\Http\Controllers;

use App\Bundles\Product\Http\Requests\SetProducts;
use App\Models\Product;
use App\Bundles\Product\Services\ProductService;

class ProductController
{
    /** @var ProductService */
    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function all()
    {
        return Product::all();
    }

    public function set(SetProducts $request)
    {
        return $this->service->set($request->get(SetProducts::FIELD_ITEMS));
    }
}
