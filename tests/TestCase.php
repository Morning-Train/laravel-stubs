<?php

namespace Morningtrain\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Morningtrain\Stubs\StubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
