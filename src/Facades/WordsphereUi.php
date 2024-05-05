<?php

namespace Wordsphere\Ui\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wordsphere\Ui\WordsphereUi
 */
class WordsphereUi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Wordsphere\Ui\WordsphereUi::class;
    }
}
