<?php

namespace Tests;

use JustRaviga\Deepl\DeeplServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [DeeplServiceProvider::class];
    }
}
