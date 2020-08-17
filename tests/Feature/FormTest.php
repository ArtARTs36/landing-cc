<?php

namespace Tests\Feature;

use App\Http\Requests\FeedBackRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

final class FormTest extends TestCase
{
    use RefreshDatabase;

    protected const BASE_URL = '/api/form';

    public function testFeedBack(): void
    {
        $response = $this->postJson($this->url('feedback'), [
            FeedBackRequest::FIELD_MESSAGE => 'Test Message',
            FeedBackRequest::FIELD_SUBJECT => 'Test Subject',
            FeedBackRequest::FIELD_AUTHOR_EMAIL => 'test@mail.ru',
            FeedBackRequest::FIELD_AUTHOR_NAME => 'Tester',
            FeedBackRequest::FIELD_AUTHOR_PHONE => '8909445674675',
        ]);

        $response->assertCreated();
    }
}
