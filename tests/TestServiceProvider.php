<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\View\View;
use WordsphereUi\WordsphereUi\Tests\TestCase;
use WordsphereUi\WordsphereUi\WordsphereUiServiceProvider;

test('it register the views folders', function () {

    /**  @var TestCase $this */
    $view = view('worsphereui-button::base');

    expect($view)->toBeInstanceOf(
        class: View::class
    );

});

test('it register the button blade component', function () {

    $aliases = Blade::getClassComponentAliases();

    expect(isset($aliases['button']))->toBeTrue();

});
