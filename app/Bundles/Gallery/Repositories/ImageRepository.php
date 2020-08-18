<?php

namespace App\Bundles\Gallery\Repositories;

use App\Abstracts\Repository;
use App\Bundles\Gallery\Models\Image;

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
     * @param string $description
     * @return Image
     */
    public function create(string $name, string $path, string $description = null): Image
    {
        return $this->newQuery()
            ->create([
                Image::FIELD_NAME => $name,
                Image::FIELD_PATH => $path,
                Image::FIELD_DESCRIPTION => $description,
            ]);
    }
}
