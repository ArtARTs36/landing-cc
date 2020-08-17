<?php

namespace App\Http\Requests;

use App\Models\Subscribe;

/**
 * Class SubscribeRequest
 * @package App\Http\Requests
 */
class SubscribeRequest extends AuthorizedRequest
{
    public const FIELD_EMAIL = Subscribe::FIELD_EMAIL;
    public const FIELD_EVENT_NAME = 'event_name';

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            static::FIELD_EMAIL => 'required|email',
            static::FIELD_EVENT_NAME => 'required|string',
        ];
    }
}
