<?php

namespace Tests\Feature;

use App\Http\Requests\FeedBackRequest;
use Tests\TestCase;

final class FormTest extends TestCase
{
    protected const BASE_URL = '/api/form';

    public function testFeedBack(): void
    {
        $response = $this->postJson($this->url('feedback'), [
            FeedBackRequest::FIELD_MESSAGE => 'Test Message',
            FeedBackRequest::FIELD_SUBJECT => 'Test Subject',
            FeedBackRequest::FIELD_AUTHOR_EMAIL => 'test@mail.ru',
            FeedBackRequest::FIELD_AUTHOR_NAME => 'Tester',
        ]);

        dump($response->status());
    }
}
