<?php

namespace App\Bundles\Gallery\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * @package App\Bundles\Gallery\Models
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $extension
 */
class Image extends Model
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_EXTENSION = 'extension';

    public const RELATION_ALBUMS = 'albums';

    //

    public const EXTENSION_PNG = 1;
    public const EXTENSION_JPG = 2;
    public const EXTENSION_JPEG = 3;

    public const IDS_EXTENSIONS = [
        self::EXTENSION_PNG => 'png',
        self::EXTENSION_JPG => 'jpg',
        self::EXTENSION_JPEG => 'jpeg',
    ];

    protected $table = 'gallery_images';

    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_DESCRIPTION,
    ];

    public function albums()
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
        return '/storage/gallery/'. $this->id. '.' . $this->extension();
    }

    public function extension(): string
    {
        return static::IDS_EXTENSIONS[$this->extension] ?? static::EXTENSION_JPG;
    }
}
