<?php

namespace App\Http\Controllers;

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Services\ImageService;
use App\Models\ExternalAboutUsPost;
use App\Models\Impression;
use App\Services\ProductService;
use Illuminate\View\View;

final class PageController
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

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

    public function equipment()
    {
        return view('pages.equipment', [
            'images' => $this->imageService->getViaCache(Album::KEY_EQUIPMENT),
        ]);
    }

    public function products(): View
    {
        return view('products.page', [
            'products' => app(ProductService::class)->top(),
        ]);
    }
}
