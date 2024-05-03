<?php

declare(strict_types=1);

namespace WordsphereUi\WordsphereUi;

use WordsphereUi\WordsphereUi\Components\Button\Base;

class WordsphereUi
{
    public static function defaultComponents(): array
    {
        return [
            'button' => [
                'class' => Base::class,
                'alias' => 'button',
            ],
        ];
    }
}
