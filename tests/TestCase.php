<?php

namespace Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Illuminate\Support\Facades\Artisan;
use Illuminate\View\Component;
use Orchestra\Testbench\TestCase as Orchestra;
use Wordsphere\Ui\WordsphereUiServiceProvider;

class TestCase extends Orchestra
{
    use InteractsWithViews;

    public Component $component;

    protected function setUp(): void
    {

        $this->afterApplicationCreated(function () {
            Artisan::call('view:clear');
        });

        $this->beforeApplicationDestroyed(function () {
            Artisan::call('view:clear');
        });

        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            WordsphereUiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_wordsphereui_table.php.stub';
        $migration->up();
        */
    }
}
