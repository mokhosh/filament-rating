<?php

namespace Mokhosh\FilamentRating\Entries;

use Filament\Infolists\Components\Entry;
use Mokhosh\FilamentRating\Concerns\HasStars;
use Mokhosh\FilamentRating\Concerns\HasThemes;

class RatingEntry extends Entry
{
    use HasStars;
    use HasThemes;

    public function getView(): string
    {
        return $this->getTheme()->getView() . '.static';
    }
}