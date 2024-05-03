<?php

namespace WordsphereUi\WordsphereUi;

use Illuminate\Support\Str;
use Illuminate\View\Compilers\BladeCompiler;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Symfony\Component\Finder\Finder;
use WordsphereUi\WordsphereUi\Commands\WordsphereUiCommand;

use function basename;

class WordsphereUiServiceProvider extends PackageServiceProvider
{
    public function boot(): void
    {
        parent::boot();
        $this->registerViews();
        $this->registerBladeComponents();
    }

    public function registerViews(): void
    {
        $finder = new Finder();
        $finder->directories()->in(__DIR__.'/Components/*/')->name('views');

        foreach ($finder as $directory) {
            $name = Str::kebab(basename($directory->getPath()));
            $this->loadViewsFrom($directory->getPath(), "worsphereui-{$name}");
        }
    }

    public function registerBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $compiler): void {
            foreach (WordsphereUi::defaultComponents() as $component) {
                $compiler->component($component['class'], $component['alias']);
            }
        });
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('wordsphereui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_wordsphereui_table')
            ->hasCommand(WordsphereUiCommand::class);
    }
}
