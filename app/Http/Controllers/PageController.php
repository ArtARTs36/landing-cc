<?php

namespace App\Http\Controllers;

use App\Models\ExternalAboutUsPost;
use App\Models\Impression;
use App\Services\ProductService;

class PageController
{
    public function start()
    {
        return view('start', [
            'products' => app(ProductService::class)->top(),
            'externalPosts' => ExternalAboutUsPost::top(),
            'impressions' => Impression::top(6),
        ]);
    }

    public function contacts()
    {
        return view('contacts');
    }
}
