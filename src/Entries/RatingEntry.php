<?php

namespace Mokhosh\FilamentRating\Entries;

use Filament\Infolists\Components\Entry;
use Mokhosh\FilamentRating\Concerns\HasColor;
use Mokhosh\FilamentRating\Concerns\HasSize;
use Mokhosh\FilamentRating\Concerns\HasStars;
use Mokhosh\FilamentRating\Concerns\HasTheme;

class RatingEntry extends Entry
{
    use HasColor;
    use HasSize;
    use HasStars;
    use HasTheme;

    public function getView(): string
    {
        return 'filament-rating::wrappers.entry';
    }

    public function getThemeView(): string
    {
        return $this->getTheme()->getView() . '.static';
    }
}
