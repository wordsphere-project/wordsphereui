<?php

declare(strict_types=1);

namespace WordsphereUi\WordsphereUi\Components\Button;

use Illuminate\View\Component;
use Illuminate\View\View;

class Base extends Component
{

    public string $sizeClasses = '';

    public function render(): View
    {
        return view('wordsphereui::button.base');
    }
}
