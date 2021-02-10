<?php

namespace App\Bundles\Gallery\Http\Resource;

use App\Bundles\Gallery\Models\Image;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Image
 */
class ImageResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            Image::FIELD_NAME => $this->name,
            Image::FIELD_DESCRIPTION => $this->description,
            'url' => $this->webUrl(),
        ];
    }
}
