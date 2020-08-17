<?php

namespace App\Bundles\Gallery\Http\Controllers;

use App\Bundles\Gallery\Http\Resource\ImageResource;
use App\Bundles\Gallery\Models\Album;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ImageController extends Controller
{
    /**
     * @param Album $album
     * @return AnonymousResourceCollection
     */
    public function showOfAlbum(Album $album): AnonymousResourceCollection
    {
        return ImageResource::collection($album->images);
    }
}
