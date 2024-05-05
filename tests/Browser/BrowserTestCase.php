<?php

namespace Tests\Browser;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\Dusk\Options;
use Orchestra\Testbench\Dusk\TestCase;
use function Illuminate\Filesystem\join_paths;
use function Orchestra\Testbench\Dusk\default_skeleton_path;
use function realpath;

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
