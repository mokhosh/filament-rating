<?php

namespace Mokhosh\FilamentRating\Components;

use Filament\Forms\Components\Field;
use Mokhosh\FilamentRating\Concerns\HasStars;
use Mokhosh\FilamentRating\RatingTheme;

class Rating extends Field
{
    use HasStars;

    protected RatingTheme $theme = RatingTheme::Simple;

    public function getView(): string
    {
        return $this->getTheme()->getView();
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
