<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetProducts;
use App\Models\Product;
use App\Services\ProductService;

class ProductController
{
    /** @var ProductService */
    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function home()
    {
        return view('products.home', [
            'products' => Product::all(),
        ]);
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
