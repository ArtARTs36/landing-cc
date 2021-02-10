<?php

namespace App\Contracts;

interface IntegrationClient
{
    public function postJson(string $url, array $data = []): array;

    public function json(string $method, string $url, array $options = []): array;
}
