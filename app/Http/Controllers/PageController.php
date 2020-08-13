<?php

namespace App\Http\Controllers;

use App\Services\ProductService;

class PageController
{
    public function start()
    {
        return view('start', [
            'products' => app(ProductService::class)->top(),
        ]);
    }
}
