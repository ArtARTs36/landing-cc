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
    public const KEY_AWARDS = 'awards';

    protected $table = 'gallery_albums';

    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_KEY,
    ];

    /**
     * @codeCoverageIgnore
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
}
