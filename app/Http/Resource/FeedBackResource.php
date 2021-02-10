<?php

namespace App\Http\Resource;

use App\Models\FeedBack;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class FeedBackResource
 * @mixin FeedBack
 */
class FeedBackResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            FeedBack::FIELD_MESSAGE => $this->message,
        ];
    }
}
