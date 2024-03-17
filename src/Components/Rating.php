<?php

namespace Mokhosh\FilamentRating\Components;

use Filament\Forms\Components\Field;
use Mokhosh\FilamentRating\Concerns\HasStars;
use Mokhosh\FilamentRating\Concerns\HasThemes;

class Rating extends Field
{
    use HasStars;
    use HasThemes;

    public function getView(): string
    {
        return $this->getTheme()->getView() . '.component';
    }
}
