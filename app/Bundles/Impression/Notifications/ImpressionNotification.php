<?php

namespace App\Bundles\Impression\Notifications;

use App\Bundles\Impression\Events\ImpressionCreated;
use App\Models\Impression;
use ArtARTs36\PushAllSender\Interfaces\PusherInterface;
use ArtARTs36\PushAllSender\Push;

/**
 * Class ImpressionNotification
 * @package App\Bundles\Impression\Notifications
 */
final class ImpressionNotification
{
    /** @var PusherInterface */
    private $sender;

    /**
     * ImpressionNotification constructor.
     * @param PusherInterface $sender
     */
    public function __construct(PusherInterface $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @param ImpressionCreated $event
     * @return bool
     */
    public function handle(ImpressionCreated $event): bool
    {
        return $this->send($event->getImpression());
    }

    /**
     * @param Impression $impression
     * @return bool
     */
    public function send(Impression $impression): bool
    {
        $push = new Push(
            'Отзыв #'. $impression->id,
            view('impressions.notifications.created', [
                'impression' => $impression,
            ])
        );

        return $this->sender->push($push);
    }
}
