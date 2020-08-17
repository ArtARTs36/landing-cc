<?php

namespace App\Http\Controllers;

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Services\ImageService;
use App\Models\ExternalAboutUsPost;
use App\Models\Impression;
use App\Bundles\Product\Services\ProductService;
use Illuminate\View\View;

/**
 * Class PageController
 * @package App\Http\Controllers
 */
final class PageController
{
    /** @var ImageService */
    private $imageService;

    /** @var ProductService */
    private $productService;

    /**
     * PageController constructor.
     * @param ImageService $imageService
     * @param ProductService $productService
     */
    public function __construct(ImageService $imageService, ProductService $productService)
    {
        $this->imageService = $imageService;
        $this->productService = $productService;
    }

    /**
     * @return View
     */
    public function start(): View
    {
        return view('start', [
            'products' => $this->productService->top(),
            'externalPosts' => ExternalAboutUsPost::top(),
            'impressions' => Impression::top(6),
        ]);
    }

    /**
     * @return View
     */
    public function contacts(): View
    {
        return view('contacts');
    }

    /**
     * @return View
     */
    public function equipment(): View
    {
        return view('pages.equipment', [
            'images' => $this->imageService->getViaCache(Album::KEY_EQUIPMENT),
        ]);
    }

    /**
     * @return View
     */
    public function products(): View
    {
        return view('products.page', [
            'products' => $this->productService->all(),
        ]);
    }
}
