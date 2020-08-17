<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property string $author_full_name
 * @property string $author_email
 * @property string $author_avatar
 * @property string $author_position
 * @property string $message
 * @property int $user_id
 * @property User|null $user
 * @property bool $is_active
 */
class Impression extends Model
{
    public const FIELD_AUTHOR_FULL_NAME = 'author_full_name';
    public const FIELD_AUTHOR_EMAIL = 'author_email';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_IS_ACTIVE = 'is_active';
    public const FIELD_AUTHOR_POSITION = 'author_position';

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

    public function getAuthorPosition(): string
    {
        return $this->author_position ?? 'Сотрудник';
    }

    public function cut(int $length)
    {
        if (mb_strlen($this->message) < $length) {
            return $this->message;
        }

        return mb_strcut($this->message, 0, $length) . '..';
    }

    public static function top(int $count): Collection
    {
        return static::query()
            ->latest(static::UPDATED_AT)
            ->where(static::FIELD_IS_ACTIVE, true)
            ->limit($count)
            ->get();
    }
}
