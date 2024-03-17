<?php

namespace Mokhosh\FilamentRating;

enum RatingTheme
{
    case Simple;
    case HalfStars;

    public function getView(): string
    {
        return match ($this) {
            self::Simple => 'filament-rating::simple',
            self::HalfStars => 'filament-rating::half-stars',
        };
    }
}
