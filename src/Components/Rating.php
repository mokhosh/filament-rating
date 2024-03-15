<?php

namespace Mokhosh\FilamentRating\Components;

use Filament\Forms\Components\Field;

class Rating extends Field
{
    protected string $view = 'filament-rating::rating';

    protected int $stars = 5;

    public function getStars(): array
    {
        return range(1, $this->stars);
    }
}