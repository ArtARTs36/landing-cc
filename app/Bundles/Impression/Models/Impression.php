<?php

namespace App\Bundles\Impression\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $author_full_name
 * @property string $author_email
 * @property string $author_avatar
 * @property string $author_position
 * @property string $message
 * @property int|null $user_id
 * @property User|null $user
 * @property bool $is_active
 */
class Impression extends Model
{
    public const FIELD_AUTHOR_FULL_NAME = 'author_full_name';
    public const FIELD_AUTHOR_EMAIL = 'author_email';
    public const FIELD_AUTHOR_IP = 'author_ip';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_IS_ACTIVE = 'is_active';
    public const FIELD_AUTHOR_POSITION = 'author_position';

    protected $fillable = [
        self::FIELD_AUTHOR_FULL_NAME,
        self::FIELD_AUTHOR_EMAIL,
        self::FIELD_AUTHOR_IP,
        self::FIELD_MESSAGE,
        self::FIELD_IS_ACTIVE,
        self::FIELD_AUTHOR_POSITION,
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->author_avatar ?? $this->user->getAvatarAttribute(null);
    }

    /**
     * @return string
     */
    public function getAuthorName(): string
    {
        return $this->author_full_name ?? $this->user->name;
    }

    /**
     * @return string
     */
    public function getAuthorPosition(): string
    {
        return $this->author_position ?? 'Сотрудник';
    }

    /**
     * @param int $length
     * @return string
     */
    public function cut(int $length): string
    {
        if (mb_strlen($this->message) < $length) {
            return $this->message;
        }

        return mb_strcut($this->message, 0, $length) . '..';
    }
}
