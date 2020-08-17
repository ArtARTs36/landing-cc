<?php

namespace App\Email\Messages;

use App\Http\Requests\FeedBackRequest;

class FeedBack extends Message
{
    public function send(FeedBackRequest $request)
    {
        // send on api
        return response('ok');
    }
}
