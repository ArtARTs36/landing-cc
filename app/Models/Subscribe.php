<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $email
 * @property int $event_id
 * @property Event $event
 */
class Subscribe extends Model
{
    public const FIELD_EMAIL = 'email';
    public const FIELD_EVENT_ID = 'event_id';

    protected $fillable = [
        self::FIELD_EMAIL,
        self::FIELD_EVENT_ID,
    ];

    /**
     * @return BelongsTo
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * @param string $email
     * @return Subscribe|null
     */
    public static function findByEmail(string $email): ?Subscribe
    {
        return static::query()->where(static::FIELD_EMAIL, $email)->first();
    }

    /**
     * @param string $email
     * @param int $eventId
     * @return Subscribe
     */
    public static function create(string $email, int $eventId): Subscribe
    {
        return static::query()->create([
            static::FIELD_EMAIL => $email,
            static::FIELD_EVENT_ID => $eventId,
        ]);
    }
}
