<?php

namespace App\Bundles\Impression\Events;

use App\Models\Impression;

/**
 * Class ImpressionCreated
 * @package App\Bundles\Impression\Events
 */
final class ImpressionCreated
{
    /** @var Impression */
    private $impression;

    /**
     * ImpressionCreated constructor.
     * @param Impression $impression
     */
    public function __construct(Impression $impression)
    {
        $this->impression = $impression;
    }

    /**
     * @return Impression
     */
    public function getImpression(): Impression
    {
        return $this->impression;
    }
}
