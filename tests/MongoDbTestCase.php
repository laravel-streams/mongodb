<?php

namespace Streams\MongoDb\Tests;

use Streams\Testing\TestCase;

abstract class MongoDbTestCase extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MongoDbServiceProvider::class];
    }
}
