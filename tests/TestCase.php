<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @param string|null $url
     * @return string
     */
    protected function url(string $url = null): string
    {
        return static::BASE_URL . ($url ? '/'. $url : $url);
    }
}
