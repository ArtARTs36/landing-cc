<?php

namespace App\Bundles\Gallery\Repositories;

use App\Contracts\Repository;
use App\Bundles\Gallery\Models\Image;
use Illuminate\Support\Collection;

/**
 * Class ImageRepository
 * @package App\Bundles\Gallery\Repositories
 */
class ImageRepository extends Repository
{
    /**
     * @return string
     */
    public function getModelClass(): string
    {
        return Image::class;
    }

    /**
     * @param string $name
     * @param string $path
     * @param int|null $position
     * @param string $description
     * @return Image
     */
    public function create(string $name, string $path, int $position = null, string $description = null): Image
    {
        return $this->newQuery()
            ->create([
                Image::FIELD_NAME => $name,
                Image::FIELD_PATH => $path,
                Image::FIELD_POSITION => $position,
                Image::FIELD_DESCRIPTION => $description,
            ]);
    }

    /**
     * @param int $albumId
     * @return Collection
     */
    public function getOfAlbumById(int $albumId): Collection
    {
        return Image::query()
            ->latest(Image::FIELD_POSITION)
            ->whereHas(Image::RELATION_ALBUMS, function ($query) use ($albumId) {
                $query->where('id', $albumId);
            })
            ->get();
    }
}
