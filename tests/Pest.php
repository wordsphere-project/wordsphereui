<?php

use Illuminate\Support\Facades\Blade;
use Pest\Expectation;
use Tests\Browser\BrowserTestCase;
use Tests\TestCase;

uses(TestCase::class)->group('unit')->in('Unit');
uses(BrowserTestCase::class)->group('browser')->in('Browser');

uses(TestCase::class)->group('unit-components')
    ->in('../src/Components/*/tests/Unit');

expect()->extend('render', function (array $data = []): Expectation {

    $this->value = Blade::render($this->value, $data);

    return $this;
});

function render(string $view, array $data = []): string
{
    return Blade::render($view, $data);
}
