<?php

namespace App\Bundles\Gallery\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * @package App\Bundles\Gallery\Models
 * @property int $id
 * @property string $name
 * @property string $description
 */
class Image extends Model
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';

    protected $table = 'gallery_images';

    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_DESCRIPTION,
    ];

    /**
     * @return string
     */
    public function webUrl(): string
    {
        return '/storage/gallery/'. $this->id;
    }
}
