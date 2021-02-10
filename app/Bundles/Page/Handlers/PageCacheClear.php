<?php

namespace App\Bundles\Page\Handlers;

use App\Bundles\Page\Services\PageService;
use TCG\Voyager\Models\Page;

/**
 * Class PageCacheClear
 * @package App\Bundles\Page\Handlers
 */
final class PageCacheClear
{
    private $service;

    /**
     * PageCacheClear constructor.
     * @param PageService $service
     */
    public function __construct(PageService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Page $page
     */
    public function handle(Page $page): void
    {
        $this->service->clearCache($page);
    }
}
