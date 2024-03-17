<?php

namespace Mokhosh\FilamentRating\Concerns;

use Mokhosh\FilamentRating\RatingTheme;

trait HasTheme
{
    protected RatingTheme $theme = RatingTheme::Simple;

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
