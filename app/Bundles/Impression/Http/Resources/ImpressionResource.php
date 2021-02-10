<?php

namespace App\Bundles\Impression\Http\Resources;

use App\Bundles\Impression\Models\Impression;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Impression
 */
class ImpressionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'message' => $this->message,
        ];
    }
}
