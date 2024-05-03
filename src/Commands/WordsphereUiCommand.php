<?php

namespace WordsphereUi\WordsphereUi\Commands;

use Illuminate\Console\Command;

class WordsphereUiCommand extends Command
{
    public $signature = 'wordsphereui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
