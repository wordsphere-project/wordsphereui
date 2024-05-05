<?php

declare(strict_types=1);

namespace Wordsphere\Ui\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Wordsphere\Ui\View\WordsphereUiComponent;

use function view;

class Base extends WordsphereUiComponent
{
    public function blade(): View
    {
        return view('wordsphereui-button::base');
    }

    public function render(): Closure
    {
        return function (array $data) {
            return $this->blade()->with($this->setupSize($data));
        };

    }

    private function runWordsphereUiComponents(array $data): array
    {

    }
}
