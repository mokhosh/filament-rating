<?php

namespace Mokhosh\FilamentRating\Columns;

use Filament\Tables\Columns\Column;
use Mokhosh\FilamentRating\Concerns\HasStars;
use Mokhosh\FilamentRating\RatingTheme;

class RatingColumn extends Column
{
    use HasStars;

    protected RatingTheme $theme = RatingTheme::Simple;

    public function getView(): string
    {
        return $this->getTheme()->getView() . '.column';
    }

    public function theme(RatingTheme $theme): static
    {
        $this->theme = $theme;

        return $this;
    }

    public function getTheme(): RatingTheme
    {
        return $this->theme;
    }
}