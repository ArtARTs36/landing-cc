<?php

namespace App\Bundles\Gallery\Services;

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
}
