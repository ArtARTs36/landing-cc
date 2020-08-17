<?php

namespace App\Bundles\Gallery\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Ramsey\Collection\Collection;

/**
 * Class Album
 * @property int $id
 * @property string $name
 * @property Image[]|Collection|null $images
 */
final class Album extends Model
{
    public const FIELD_NAME = 'name';

    protected $table = 'gallery_albums';

    protected $fillable = [
        self::FIELD_NAME,
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
}
