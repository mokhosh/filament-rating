<?php

namespace Mokhosh\FilamentRating\Columns;

use Filament\Tables\Columns\Column;
use Mokhosh\FilamentRating\Concerns\HasStars;
use Mokhosh\FilamentRating\Concerns\HasThemes;

class RatingColumn extends Column
{
    use HasStars;
    use HasThemes;

    public function getView(): string
    {
        return $this->getTheme()->getView() . '.column';
    }
}
