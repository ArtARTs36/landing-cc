<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Models\Event;
use App\Models\Subscribe;

/**
 * Class EventController
 * @package App\Http\Controllers
 */
class EventController extends Controller
{
    /**
     * @param SubscribeRequest $request
     * @return Subscribe
     */
    public function subscribe(SubscribeRequest $request): Subscribe
    {
        return Event::findByName($request->get(SubscribeRequest::FIELD_EVENT_NAME))
            ->subscribe($request->get(SubscribeRequest::FIELD_EMAIL));
    }
}
