<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $link
 * @property string $published_at
 * @property string|null $image_url
 */
class ExternalAboutUsPost extends Model
{
    public const FIELD_TITLE = 'title';
    public const FIELD_LINK = 'link';
    public const FIELD_PUBLISHED_AT = 'published_at';
    public const FIELD_IMAGE_URL = 'image_url';

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

    /**
     * @return bool
     */
    public function hasImage(): bool
    {
        return !empty($this->image_url);
    }
}
