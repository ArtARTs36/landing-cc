<?php

namespace App\Bundles\Impression\Http\Controllers;

use App\Bundles\Impression\Entities\Author;
use App\Bundles\Impression\Http\Requests\StoreImpression;
use App\Bundles\Impression\Http\Resources\ImpressionResource;
use App\Bundles\Impression\Services\ImpressionService;
use App\Http\Controllers\Controller;

final class ImpressionController extends Controller
{
    /** @var ImpressionService */
    private $service;

    /**
     * ImpressionController constructor.
     * @param ImpressionService $service
     */
    public function __construct(ImpressionService $service)
    {
        $this->service = $service;
    }

    /**
     * @param StoreImpression $request
     * @return ImpressionResource
     */
    public function store(StoreImpression $request): ImpressionResource
    {
        return new ImpressionResource(
            $this->service->create(
                Author::createFromRequest($request),
                $request->get(StoreImpression::FIELD_MESSAGE)
            )
        );
    }
}
