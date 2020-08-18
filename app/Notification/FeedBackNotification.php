<?php

namespace App\Notification;

use App\Events\FeedBackCreated;
use App\Models\FeedBack;
use ArtARTs36\PushAllSender\Interfaces\PusherInterface;
use ArtARTs36\PushAllSender\Push;

/**
 * Class FeedBackNotification
 * @package App\Notification
 */
final class FeedBackNotification
{
    private $sender;

    /**
     * FeedBackNotification constructor.
     * @param PusherInterface $sender
     */
    public function __construct(PusherInterface $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @param FeedBackCreated $event
     * @return bool
     * @throws \Throwable
     */
    public function handle(FeedBackCreated $event)
    {
        return $this->send($event->feedBack);
    }

    /**
     * @param FeedBack $feedBack
     * @return bool
     * @throws \Throwable
     */
    public function send(FeedBack $feedBack): bool
    {
        $push = new Push(
            'Обратная связь #'. $feedBack->id,
            view('notifications.feedback.created', [
                'feedBack' => $feedBack,
            ])->render()
        );

        return $this->sender->push($push);
    }
}
