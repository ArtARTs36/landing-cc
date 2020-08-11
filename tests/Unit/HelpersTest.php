<?php

namespace Tests\Unit;

use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HelpersTest extends TestCase
{
    use RefreshDatabase;

    public function testSetting()
    {
        Setting::query()->create([
            Setting::FIELD_KEY => 'hello',
            Setting::FIELD_VALUE => 'guys',
        ]);

        self::assertEquals('guys', \setting('hello'));
    }
}
