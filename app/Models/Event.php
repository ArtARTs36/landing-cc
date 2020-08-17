<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $key
 * @property string $name
 */
class Event extends Model
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';

    protected $fillable = [
        self::FIELD_KEY,
        self::FIELD_NAME,
    ];

    /**
     * @param string $email
     * @return Subscribe
     */
    public function subscribe(string $email): Subscribe
    {
        return Subscribe::create($email, $this->id);
    }

    /**
     * @return HasMany
     */
    public function subscribes(): HasMany
    {
        return $this->hasMany(Subscribe::class);
    }

    public static function findByKey(string $key): ?Event
    {
        return static::query()->where(static::FIELD_KEY, $key)->first();
    }

    /**
     * @param string $name
     * @return Event|null
     */
    public static function findByName(string $name): ?Event
    {
        return static::query()->where(static::FIELD_NAME, $name)->first();
    }

    /**
     * @param string $key
     * @param string $name
     * @return Event
     */
    public static function create(string $key, string $name): Event
    {
        return static::query()->create([
            static::FIELD_KEY => $key,
            static::FIELD_NAME => $name,
        ]);
    }
}
