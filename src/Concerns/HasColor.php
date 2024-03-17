<?php

namespace Mokhosh\FilamentRating\Concerns;

trait HasColor
{
    public string $color = 'primary';

    public function color(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
