<?php

namespace App\Bundles\Impression\Http\Requests;

use App\Http\Requests\AuthorizedRequest;
use App\Bundles\Impression\Models\Impression;

/**
 * Class StoreImpression
 * @package App\Bundles\Impression\Http\Requests
 */
final class StoreImpression extends AuthorizedRequest
{
    public const FIELD_AUTHOR_FULL_NAME = Impression::FIELD_AUTHOR_FULL_NAME;
    public const FIELD_AUTHOR_EMAIL = Impression::FIELD_AUTHOR_EMAIL;
    public const FIELD_MESSAGE = Impression::FIELD_MESSAGE;
    public const FIELD_AUTHOR_POSITION = Impression::FIELD_AUTHOR_POSITION;

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            static::FIELD_AUTHOR_FULL_NAME => 'required|string',
            static::FIELD_AUTHOR_EMAIL => 'required|email',
            static::FIELD_MESSAGE => 'required|string',
            static::FIELD_AUTHOR_POSITION => 'sometimes|string',
        ];
    }

    /**
     * @return array
     */
    public function getAuthorData(): array
    {
        return array_merge($this->only([
            static::FIELD_AUTHOR_FULL_NAME,
            static::FIELD_AUTHOR_EMAIL,
            static::FIELD_AUTHOR_POSITION,
        ]), ['author_ip' => $this->ip()]);
    }
}
