<?php

namespace App\Http\Controllers;

use App\Events\FeedBackCreated;
use App\Http\Requests\FeedBackRequest;
use App\Http\Resource\FeedBackResource;
use App\Models\FeedBack;

/**
 * Class FeedBackController
 * @package App\Http\Controllers
 */
final class FeedBackController extends Controller
{
    /**
     * @param FeedBackRequest $request
     * @return FeedBackResource
     */
    public function store(FeedBackRequest $request): FeedBackResource
    {
        $feedBack = new FeedBack();
        $feedBack->fill($request->only($feedBack->getFillable()));
        $feedBack->author_ip = $request->ip();
        $feedBack->save();

        event(new FeedBackCreated($feedBack));

        return new FeedBackResource($feedBack);
    }
}
