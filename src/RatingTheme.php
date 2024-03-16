<?php

namespace Mokhosh\FilamentRating;

enum RatingTheme
{
    case Simple;

    public function getView(): string
    {
        return match ($this) {
            self::Simple => 'filament-rating::simple',
        };
    }
}
