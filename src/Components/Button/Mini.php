<?php

namespace Wordsphere\Ui\Components\Button;

use Illuminate\View\Component;
use Illuminate\View\View;

class Mini extends Component
{
    public function render(): View
    {
        return view('wordsphereui-button::mini');
    }
}
