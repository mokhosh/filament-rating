<?php

namespace Mokhosh\FilamentRating\Components;

use Filament\Forms\Components\Field;
use Mokhosh\FilamentRating\RatingTheme;

class Rating extends Field
{
    protected int $stars = 5;

    protected RatingTheme $theme = RatingTheme::Simple;

    public function getView(): string
    {
        return $this->getTheme()->getView();
    }

    public function stars(int $stars): static
    {
        $this->stars = $stars;

        return $this;
    }

    public function getStars(): array
    {
        return range(1, $this->stars);
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
