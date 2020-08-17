<?php

namespace App\Bundles\Gallery\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Ramsey\Collection\Collection;

/**
 * Class Album
 * @property int $id
 * @property string $key
 * @property string $name
 * @property Image[]|Collection|null $images
 */
final class Album extends Model
{
    public const FIELD_NAME = 'name';
    public const FIELD_KEY = 'key';

    public const KEY_EQUIPMENT = 'equipment';

    protected $table = 'gallery_albums';

    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_KEY,
    ];

    /**
     * @return BelongsToMany
     */
    public function images(): BelongsToMany
    {
        return $this->belongsToMany(
            Image::class,
            'gallery_album_image',
            'image_id',
            'album_id'
        );
    }

    public static function idByKeyViaCache(string $key)
    {
        return static::idByKey($key);
    }

    public static function idByKey(string $key): int
    {
        return static::query()
            ->select(['id'])
            ->where(static::FIELD_KEY, $key)
            ->firstOrFail()
            ->id;
    }

    /**
     * @param string $key
     * @param string $name
     * @return Album
     */
    public static function create(string $key, string $name): Album
    {
        return static::query()->create([
            Album::FIELD_KEY => $key,
            Album::FIELD_NAME => $name,
        ]);
    }
}
