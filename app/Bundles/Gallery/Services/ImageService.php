<?php

namespace App\Bundles\Gallery\Services;

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Models\Image;
use App\Bundles\Gallery\Repositories\AlbumRepository;
use App\Bundles\Gallery\Repositories\ImageRepository;
use Illuminate\Support\Collection;

class ImageService
{
    private $repository;

    private $albumRepository;

    public function __construct(ImageRepository $repository, AlbumRepository $albumRepository)
    {
        $this->repository = $repository;
        $this->albumRepository = $albumRepository;
    }

    /**
     * @param string $albumKey
     * @return Collection
     */
    public function getOfAlbumViaCache(string $albumKey): Collection
    {
        return $this->getOfAlbum($albumKey);
    }

    /**
     * @param string $albumKey
     * @return Collection
     */
    public function getOfAlbum(string $albumKey): Collection
    {
        return $this->repository->getByAlbumKey($albumKey);
    }
}
