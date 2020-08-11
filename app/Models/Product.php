<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $quantity
 * @property string $quantity_unit
 * @property int $size
 * @property string $size_unit
 */
class Product extends Model
{
    public const FIELD_NAME = 'name';
    public const FIELD_PRICE = 'price';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_QUANTITY_UNIT = 'quantity_unit';
    public const FIELD_SIZE = 'size';
    public const FIELD_SIZE_UNIT = 'size_unit';

    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_PRICE,
        self::FIELD_QUANTITY,
        self::FIELD_QUANTITY_UNIT,
        self::FIELD_SIZE,
        self::FIELD_SIZE_UNIT,
    ];
}
