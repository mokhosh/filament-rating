<?php

namespace Mokhosh\FilamentRating\Columns;

use Filament\Tables\Columns\Column;
use Mokhosh\FilamentRating\Concerns\HasColor;
use Mokhosh\FilamentRating\Concerns\HasSize;
use Mokhosh\FilamentRating\Concerns\HasStars;
use Mokhosh\FilamentRating\Concerns\HasTheme;

class RatingColumn extends Column
{
    use HasColor;
    use HasSize;
    use HasStars;
    use HasTheme;

    public function getView(): string
    {
        return 'filament-rating::wrappers.column';
    }

    public function getThemeView(): string
    {
        return $this->getTheme()->getView() . '.static';
    }
}
