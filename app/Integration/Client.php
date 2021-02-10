<?php

namespace App\Integration;

use App\Contracts\IntegrationClient;
use GuzzleHttp\ClientInterface;

class Client implements IntegrationClient
{
    protected $guzzle;

    public function __construct(ClientInterface $client)
    {
        $this->guzzle = $client;
    }

    public function postJson(string $url, array $data = []): array
    {
        return $this->json('POST', $url, [
            'form_params' => $data,
        ]);
    }

    public function json(string $method, string $url, array $options = []): array
    {
        $options = array_merge([
            'headers' => [
                'Accept' => 'application/json',
            ],
        ], $options);

        return json_decode($this->guzzle->request($method, $url, $options)->getBody()->getContents(), true);
    }
}
