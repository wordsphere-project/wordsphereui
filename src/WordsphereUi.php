<?php

declare(strict_types=1);

namespace Wordsphere\Ui;

use Wordsphere\Ui\Components\Button\Base;
use Wordsphere\Ui\Components\Button\Mini;

class WordsphereUi
{
    /**
     * @return array<string,array<string,string|class-string>>
     */
    public static function defaultComponents(): array
    {
        return [
            'button' => [
                'class' => Base::class,
                'alias' => 'button',
            ],
            'button-mini' => [
                'class' => Mini::class,
                'alias' => 'button-mini',
            ],
        ];
    }
}
