<?php


use Illuminate\Support\Facades\Blade;
use Illuminate\View\ComponentAttributeBag;
use Wordsphere\Ui\Components\Button\Base;

beforeEach(function () {
    $this->component = (new Base())->withName('button');
});

test('it runs the test', function() {
    expect(true)->toBeTrue();
});

test('it should have properties in component', function () {

    expect($this->component)->toHaveProperties([
        'full',
        'size',
        'sizeClasses'
    ]);

    expect($this->component->full)->toBeFalse();
});

test('it sets the size of the button', function (): void {

    $view = Blade::render('<x-button size="sm" />');

    expect($view)->toContain('class="py-1.5 px-2 rounded-sm"');

});

test('it should render the button with the correct tag', function (): void {

    $href = fake()->url;

    $view = Blade::render('<x-button :$href class="py-2" size="sm" />', compact('href'));

    expect($view)->toContain($href);

    /*expect('<x-button :href />')
        ->render()
        ->toContain('hj');*/

});
