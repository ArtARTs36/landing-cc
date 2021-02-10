<?php

namespace App\Bundles\Gallery\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Image
 * @package App\Bundles\Gallery\Models
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $position
 * @property string $path
 */
final class Image extends Model
{
    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_PATH = 'path';
    public const FIELD_POSITION = 'position';

    public const RELATION_ALBUMS = 'albums';

    //

    protected $table = 'gallery_images';

    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_DESCRIPTION,
        self::FIELD_POSITION,
    ];

    /**
     * @return BelongsToMany
     */
    public function albums(): BelongsToMany
    {
        return $this->belongsToMany(
            Album::class,
            'gallery_album_image',
            'album_id',
            'image_id'
        );
    }

    /**
     * @return string
     */
    public function webUrl(): string
    {
        return '/storage/' . $this->path;
    }

    /**
     * @return string
     */
    public function getFullPath(): string
    {
        return base_path($this->path);
    }
}
