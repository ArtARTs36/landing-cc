<?php

namespace App\Bundles\Impression\Services;

use App\Bundles\Impression\Entities\Author;
use App\Bundles\Impression\Events\ImpressionCreated;
use App\Bundles\Impression\Repository\ImpressionRepository;
use App\Models\Impression;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

/**
 * Class ImpressionService
 * @package App\Bundles\Impression\Services
 */
final class ImpressionService
{
    private const CACHE_KEY_ALL = 'impressions_all';
    private const CACHE_KEY_TOP = 'impressions_top';

    private $repository;

    /**
     * ImpressionService constructor.
     * @param ImpressionRepository $repository
     */
    public function __construct(ImpressionRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return Collection
     */
    public function top(): Collection
    {
        return Cache::remember(static::CACHE_KEY_TOP, 3600 * 24 * 14, function () {
            return $this->repository->top(6);
        });
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return Cache::remember(static::CACHE_KEY_ALL, 3600 * 24 * 14, function () {
            return $this->repository->allActive();
        });
    }

    /**
     * @param Author $author
     * @param string $message
     * @return Impression
     */
    public function create(Author $author, string $message): Impression
    {
        $impression = $this->repository->create($author, $message, false);

        event(new ImpressionCreated($impression));

        return $impression;
    }
}
