<?php

namespace App\Notification;

use App\Events\FeedBackCreated;
use App\Integration\FeedBackSender;

class SendToPanel
{
    protected $sender;

    public function __construct(FeedBackSender $sender)
    {
        $this->sender = $sender;
    }

    public function handle(FeedBackCreated $event): void
    {
        try {
            $this->sender->send($event->feedBack);
        } catch (\Throwable $e) {
            report($e);
        }
    }
}
