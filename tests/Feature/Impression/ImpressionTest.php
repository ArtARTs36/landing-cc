<?php

namespace Tests\Feature\Impression;

use App\Bundles\Impression\Events\ImpressionCreated;
use App\Bundles\Impression\Models\Impression;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class ImpressionTest
 * @package Tests\Feature\Impression
 */
final class ImpressionTest extends TestCase
{
    use RefreshDatabase;

    protected const BASE_URL = '/api/impressions';

    /**
     * @covers \App\Bundles\Impression\Http\Controllers\ImpressionController::store
     */
    public function testStore(): void
    {
        $this->expectsEvents(ImpressionCreated::class);

        $request = factory(Impression::class)->make()->toArray();

        $response = $this->postJson($this->url(), $request)->assertCreated()->decodeResponseJson();

        self::assertArrayHasKey('data', $response);
        self::assertArrayHasKey('id', $response['data']);
        self::assertNotNull(Impression::query()->find($response['data']['id']));
    }
}
