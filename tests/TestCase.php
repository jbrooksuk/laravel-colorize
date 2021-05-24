<?php

namespace JamesBrooks\Colorize\Tests;

use JamesBrooks\Colorize\ColorizeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ColorizeServiceProvider::class
        ];
    }
}
