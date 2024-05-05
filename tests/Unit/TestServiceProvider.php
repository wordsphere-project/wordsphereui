<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\View\View;
use Tests\TestCase;

test('it register the views folders', function () {

    /** @var TestCase $this */
    $view = view('wordsphereui-button::base');

    expect($view)->toBeInstanceOf(
        class: View::class
    );

});

test('it register the button blade component', function () {

    $aliases = Blade::getClassComponentAliases();

    expect(isset($aliases['button']))->toBeTrue();

});

test('it renders blade', function () {
    $view = Blade::render('<x-button />');

    expect($view)->toBeString();

});
