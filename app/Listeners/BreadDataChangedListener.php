<?php

namespace App\Listeners;

use App\Bundles\Page\Handlers\PageCacheClear;
use TCG\Voyager\Events\BreadDataChanged;
use TCG\Voyager\Models\Page;

class BreadDataChangedListener
{
    private const EVENT_HANDLER = [
        'Updated' => [
            Page::class => PageCacheClear::class,
        ],
    ];

    /**
     * @param BreadDataChanged $event
     */
    public function handle(BreadDataChanged $event): void
    {
        $handler = $this->selectHandler($event);
        if ($handler === null) {
            return;
        }

        $handler->handle($event->data);
    }

    /**
     * @param BreadDataChanged $event
     * @return null|PageCacheClear|mixed
     */
    private function selectHandler(BreadDataChanged $event)
    {
        if (empty(static::EVENT_HANDLER[$event->changeType])) {
            return null;
        }

        if (empty(static::EVENT_HANDLER[$event->changeType][get_class($event->data)])) {
            return null;
        }

        $class = static::EVENT_HANDLER[$event->changeType][get_class($event->data)];

        return app($class);
    }
}
