<?php

namespace App\Models;

use App\Support\WithTop;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $link
 * @property string $published_at
 */
class ExternalAboutUsPost extends Model
{
    use WithTop;

    public const FIELD_TITLE = 'title';
    public const FIELD_LINK = 'link';
    public const FIELD_PUBLISHED_AT = 'published_at';

    protected $dates = [
        self::FIELD_PUBLISHED_AT,
    ];

    public static function top(int $count = 3)
    {
        return static::query()
            ->latest(static::FIELD_PUBLISHED_AT)
            ->limit($count)
            ->get();
    }
}
