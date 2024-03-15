<?php

namespace Mokhosh\FilamentRating\Commands;

use Illuminate\Console\Command;

class FilamentRatingCommand extends Command
{
    public $signature = 'filament-rating';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
