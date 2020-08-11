<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function url(string $url = null)
    {
        return static::BASE_URL . ($url ? '/'. $url : $url);
    }
}
