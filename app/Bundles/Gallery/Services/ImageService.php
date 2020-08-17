<?php

namespace App\Bundles\Gallery\Services;

use App\Bundles\Gallery\Models\Album;
use App\Bundles\Gallery\Models\Image;

class ImageService
{
    public function save(string $name, string $description = null): Image
    {
        $image = new Image();
        $image->name = $name;
        $image->description = $description;
        $image->save();

        return $image;
    }

    public function getViaCache(string $albumKey)
    {
        return $this->getOfAlbum($albumKey);
    }

    public function getOfAlbum(string $albumKey)
    {
        $albumId = Album::idByKeyViaCache($albumKey);

        return Image::query()
            ->whereHas(Image::RELATION_ALBUMS, function ($query) use ($albumId) {
                $query->where('id', $albumId);
            })
            ->get();
    }
}
