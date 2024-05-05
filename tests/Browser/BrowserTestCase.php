<?php

namespace Tests\Browser;

use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\Dusk\TestCase;

class BrowserTestCase extends TestCase
{
    use WithWorkbench;

    protected static $baseServeHost = '127.0.0.1';

    protected static $baseServePort = 9000;

    public function setUp(): void
    {
        parent::setUp();
    }
}
