<?php

namespace App\Integration;

use App\Contracts\IntegrationClient;

class EmptyClient implements IntegrationClient
{
    public function postJson(string $url, array $data = []): array
    {
        return [];
    }

    public function json(string $method, string $url, array $options = []): array
    {
        return [];
    }
}
