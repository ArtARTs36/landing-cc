<?php

namespace Tests\Feature;

use App\Http\Requests\SubscribeRequest;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class EventTest
 * @package Tests\Feature
 */
class EventTest extends TestCase
{
    use RefreshDatabase;

    public function testSubscribe(): void
    {
        $subscribe = Event::create('test', 'test');

        $response = $this->postJson('/api/events/subscribe', [
            SubscribeRequest::FIELD_EMAIL => 'my@mail.ru',
            SubscribeRequest::FIELD_EVENT_KEY => $subscribe->name,
        ])->assertCreated()->decodeResponseJson();

        self::assertArrayHasKey('id', $response);
        self::assertEquals(1, $response['id']);
        self::assertNotNull(Event::query()->find($response['id']));
    }
}
