<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\View\View;
use Tests\TestCase;
use Wordsphere\Ui\View\WordsphereUiComponent;

enum GenericComponentSize
{
}

class GenericComponent extends WordsphereUiComponent
{
    public mixed $size = null;

    public mixed $sizeClasses = null;

    public function blade(): View
    {
        return view('generic');
    }
}

/**
 * @var TestCase $this
 */
beforeEach(function (): void {

    /** @var TestCase $this */
    $this->component = (new GenericComponent())->withName('generic');
    Blade::component(GenericComponent::class, 'generic');

});

test('it can create a wordsphere component', function (): void {

    /** @var TestCase $this */
    expect($this->component)->toBeInstanceOf(WordsphereUiComponent::class);

});

test('it can change the attributes bag', function (): void {

    $this->component->withAttributes([
        'size' => 'sm',
    ]);

    expect($this->component->attributes->get('size'))
        ->toBe('sm');

    $reflected = new ReflectionClass($this->component);

    $method = $reflected->getMethod('setupSize');
    $method->invoke($this->component);

    expect($this->component->size)->toBe('sm');
    expect($this->component->sizeClasses)->toBe('py-1.5 px-1.5 text-sm rounded-sm');

});
