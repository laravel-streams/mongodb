<?php

namespace Streams\MongoDb\Tests;

use Streams\Testing\TestCase;
use Streams\MongoDb\MongoDbServiceProvider;

abstract class MongoDbTestCase extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MongoDbServiceProvider::class];
    }
}
