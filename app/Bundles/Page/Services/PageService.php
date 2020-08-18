<?php

namespace App\Bundles\Page\Services;

use App\Bundles\Page\Repositories\PageRepository;
use Illuminate\Support\Facades\Cache;
use TCG\Voyager\Models\Page;

/**
 * Class PageService
 * @package App\Bundles\Page\Services
 */
final class PageService
{
    private $repository;

    /**
     * PageService constructor.
     * @param PageRepository $repository
     */
    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $slug
     * @return Page|null
     */
    public function showActive(string $slug): ?Page
    {
        return Cache::remember('app_page_'. $slug, 3600 * 24 * 14, function () use ($slug) {
            return $this->repository->findActive($slug);
        });
    }
}
