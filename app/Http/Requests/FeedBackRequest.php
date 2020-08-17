<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class FeedBackRequest extends FormRequest
{
    public const FIELD_AUTHOR_NAME = 'author_full_name';
    public const FIELD_AUTHOR_EMAIL = 'author_email';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_MESSAGE = 'message';

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            static::FIELD_AUTHOR_NAME => 'string|required',
            static::FIELD_AUTHOR_EMAIL => 'string|required|email',
            static::FIELD_SUBJECT => 'string|sometimes',
            static::FIELD_MESSAGE => 'string|required',
        ];
    }
}
