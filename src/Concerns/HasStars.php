<?php

namespace Mokhosh\FilamentRating\Concerns;

trait HasStars
{
    protected int $stars = 5;

    protected bool $allowZero = false;

    public function stars(int $stars): static
    {
        $this->stars = $stars;

        return $this;
    }

    public function getStars(): int
    {
        return $this->stars;
    }

    public function getStarsArray(): array
    {
        return range(1, $this->stars);
    }

    public function allowZero(bool $allowZero = true): static
    {
        $this->allowZero = $allowZero;

        return $this;
    }

    public function shouldAllowZero(): bool
    {
        return $this->allowZero;
    }
}
