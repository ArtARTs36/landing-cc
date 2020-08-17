<?php

namespace App\Http\Requests;

use App\Models\FeedBack;
use Illuminate\Foundation\Http\FormRequest;

final class FeedBackRequest extends FormRequest
{
    public const FIELD_AUTHOR_NAME = FeedBack::FIELD_AUTHOR_NAME;
    public const FIELD_AUTHOR_EMAIL = FeedBack::FIELD_AUTHOR_EMAIL;
    public const FIELD_AUTHOR_PHONE = FeedBack::FIELD_AUTHOR_PHONE;
    public const FIELD_SUBJECT = FeedBack::FIELD_SUBJECT;
    public const FIELD_MESSAGE = FeedBack::FIELD_MESSAGE;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            static::FIELD_AUTHOR_NAME => 'string|required',
            static::FIELD_AUTHOR_EMAIL => 'sometimes|email',
            static::FIELD_SUBJECT => 'string|sometimes',
            static::FIELD_MESSAGE => 'string|required',
            static::FIELD_AUTHOR_PHONE => 'string|required',
        ];
    }
}
