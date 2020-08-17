<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FeedBack
 * @property int $id
 * @property string $author_name
 * @property string|null $author_email
 * @property string $author_phone
 * @property string $author_ip
 * @property string|null $subject
 * @property string $message
 */
class FeedBack extends Model
{
    public const FIELD_AUTHOR_NAME = 'author_full_name';
    public const FIELD_AUTHOR_EMAIL = 'author_email';
    public const FIELD_AUTHOR_PHONE = 'author_phone';
    public const FIELD_AUTHOR_IP = 'author_ip';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_MESSAGE = 'message';

    protected $fillable = [
        self::FIELD_AUTHOR_NAME,
        self::FIELD_AUTHOR_EMAIL,
        self::FIELD_AUTHOR_PHONE,
        self::FIELD_AUTHOR_IP,
        self::FIELD_SUBJECT,
        self::FIELD_MESSAGE,
    ];
}
