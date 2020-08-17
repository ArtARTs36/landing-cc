<?php

namespace App\Http\Controllers;

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Services\ImageService;
use App\Models\ExternalAboutUsPost;
use App\Models\Impression;
use App\Services\ProductService;

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
        // offset-lg-0 offset-md-3
        return view('pages.equipment', [
            'images' => $this->imageService->getViaCache(Album::KEY_EQUIPMENT),
        ]);
    }
}
