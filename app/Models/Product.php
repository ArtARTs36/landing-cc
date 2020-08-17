<?php

namespace App\Models;

use App\Bundles\Gallery\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Product
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $size
 * @property string $size_unit
 * @property int|null $image_id
 * @property Image[]|null $image
 * @property string $description
 */
class Product extends Model
{
    public const FIELD_NAME = 'name';
    public const FIELD_PRICE = 'price';
    public const FIELD_SIZE = 'size';
    public const FIELD_SIZE_UNIT = 'size_unit';
    public const FIELD_ORDER_LINK = 'order_link';
    public const FIELD_DESCRIPTION = 'description';
    public const RELATION_IMAGE = 'image';

    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_PRICE,
        self::FIELD_SIZE,
        self::FIELD_SIZE_UNIT,
        self::FIELD_ORDER_LINK,
        self::FIELD_DESCRIPTION,
    ];

    /**
     * @return BelongsTo
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
