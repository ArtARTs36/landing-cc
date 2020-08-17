<?php

namespace App\Bundles\Impression\Pages;

use App\Bundles\Impression\Services\ImpressionService;
use Illuminate\View\View;

/**
 * Class HomePage
 * @package App\Bundles\Impression\Pages
 */
final class Home
{
    private $service;

    /**
     * HomePage constructor.
     * @param ImpressionService $service
     */
    public function __construct(ImpressionService $service)
    {
        $this->service = $service;
    }

    /**
     * @return View
     */
    public function view(): View
    {
        return view('impressions.page', [
            'impressions' => $this->service->all(),
        ]);
    }
}
