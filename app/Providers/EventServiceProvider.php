<?php

namespace App\Providers;

use App\Events\FeedBackCreated;
use App\Listeners\BreadDataChangedListener;
use App\Notification\FeedBackNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use TCG\Voyager\Events\BreadDataChanged;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        BreadDataChanged::class => [
            BreadDataChangedListener::class,
        ],
        FeedBackCreated::class => [
            FeedBackNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
