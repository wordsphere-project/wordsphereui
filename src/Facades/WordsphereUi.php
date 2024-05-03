<?php

namespace WordsphereUi\WordsphereUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WordsphereUi\WordsphereUi\WordsphereUi
 */
class WordsphereUi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \WordsphereUi\WordsphereUi\WordsphereUi::class;
    }
}
