<?php

namespace App\Events;

use App\Models\FeedBack;

final class FeedBackCreated
{
    public $feedBack;

    public function __construct(FeedBack $feedBack)
    {
        $this->feedBack = $feedBack;
    }
}
