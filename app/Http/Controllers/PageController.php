<?php

namespace App\Http\Controllers;

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Services\ImageService;
use App\Bundles\Impression\Services\ImpressionService;
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

    /** @var ImpressionService */
    private $impressionService;

    /**
     * PageController constructor.
     * @param ImageService $imageService
     * @param ProductService $productService
     * @param ImpressionService $impressionService
     */
    public function __construct(
        ImageService $imageService,
        ProductService $productService,
        ImpressionService $impressionService
    ) {
        $this->imageService = $imageService;
        $this->productService = $productService;
        $this->impressionService = $impressionService;
    }

    /**
     * @return View
     */
    public function start(): View
    {
        return view('start', [
            'products' => $this->productService->top(),
            'externalPosts' => ExternalAboutUsPost::top(),
            'impressions' => $this->impressionService->top(),
        ]);
    }

    /**
     * @return View
     */
    public function contacts(): View
    {
        return view('contacts.page');
    }

    /**
     * @return View
     */
    public function equipment(): View
    {
        return view('pages.equipment', [
            'images' => $this->imageService->getOfAlbumViaCache(Album::KEY_EQUIPMENT),
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

    /**
     * @return View
     */
    public function awards(): View
    {
        return view('awards', [
           'images' => $this->imageService->getOfAlbum(Album::KEY_AWARDS),
        ]);
    }
}
