<?php

namespace App\Bundles\Gallery\Services;

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Models\Image;
use App\Bundles\Gallery\Repositories\ImageRepository;
use Illuminate\Support\Collection;

class ImageService
{
    private $repository;

    /**
     * ImageService constructor.
     * @param ImageRepository $repository
     */
    public function __construct(ImageRepository $repository)
    {
        $this->repository = $repository;
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
        $albumId = Album::idByKeyViaCache($albumKey);

        return $this->repository->getOfAlbumById($albumId);
    }
}
