<?php

namespace Mokhosh\FilamentRating\Components;

use Filament\Forms\Components\Field;
use Mokhosh\FilamentRating\Concerns\HasStars;
use Mokhosh\FilamentRating\Concerns\HasTheme;

class Rating extends Field
{
    use HasStars;
    use HasTheme;

    public function getView(): string
    {
        return $this->getTheme()->getView() . '.component';
    }
}
