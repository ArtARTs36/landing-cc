<?php

namespace App\Bundles\Page\Http\Controllers;

use App\Bundles\Page\Services\PageService;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class PageController extends Controller
{
    private $service;

    public function __construct(PageService $service)
    {
        $this->service = $service;
    }

    public function show(string $slug): View
    {
        $page = $this->service->showActive($slug);
        if ($page === null) {
            abort(404);
        }

        return view('page', [
            'page' => $page,
        ]);
    }
}
