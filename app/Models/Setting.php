<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 * @package App\Models
 * @property int $id
 * @property string $key
 * @property string $value
 */
class Setting extends Model
{
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    protected $fillable = [
        self::FIELD_KEY,
        self::FIELD_VALUE,
    ];
}
