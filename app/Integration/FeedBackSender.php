<?php

namespace App\Integration;

use App\Contracts\IntegrationClient;
use App\Models\FeedBack;

class FeedBackSender
{
    protected $client;

    public function __construct(IntegrationClient $client)
    {
        $this->client = $client;
    }

    public function send(FeedBack $feedBack): array
    {
        return $this->client->postJson('/api/landing/feedbacks', [
            'people_title' => $feedBack->author_full_name,
            'people_email' => $feedBack->author_email,
            'people_phone' => $feedBack->author_phone,
            'ip'    => $feedBack->author_ip,
            'message' => $this->prepareMessage($feedBack),
        ]);
    }

    protected function prepareMessage(FeedBack $feedBack)
    {
        return "Тема сообщения: " .  $feedBack->subject . "\n" . $feedBack->message;
    }
}
